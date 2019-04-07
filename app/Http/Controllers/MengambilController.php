<?php

namespace App\Http\Controllers;

use App\dosen;
use App\matakuliah;
use App\Mengajar;
use App\Mengambil;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MengambilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = 'SELECT id_krs,nama, nrp, nama_matkul, sks, kelas, namadosen, nilai FROM `mengambils`,`mengajars`,`students`,`matakuliahs`,`dosens` WHERE students.nrp=mengambils.nrpmhs and mengambils.kelasdiambil = mengajars.id_kelas and mengajars.kode_matkul=matakuliahs.kode_mk and mengajars.nipdosenwali=dosens.nip';
        $ngambil = DB::select($query);
        return view('mengambils.index',compact('ngambil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ngambil = Mengambil::all();
        $ngajar = Mengajar::pluck('id_kelas','id_kelas');
        $mhs = Student::pluck('nama','nrp');
        return view('mengambils.create',compact('mhs','ngajar','ngambil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mengambil::create($request->all());
        return redirect('/mengambils');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mengambil  $mengambil
     * @return \Illuminate\Http\Response
     */
    public function show(Mengambil $mengambil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mengambil  $mengambil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ambil    = Mengambil::findorfail($id);
        $ngajar = Mengajar::pluck('id_kelas','id_kelas');
        $mhs = Student::pluck('nama','nrp');
        return view('mengambils.edit',compact('ambil','ngajar','mhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mengambil  $mengambil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mengambil = Mengambil::findorfail($id);
        $mengambil->update($request->all());
        return redirect('/mengambils');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mengambil  $mengambil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengambil $mengambil)
    {
        $mengambil->delete();
        return redirect('/mengambils');
    }
}
