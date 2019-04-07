<?php

namespace App\Http\Controllers;

use App\dosen;
use App\matakuliah;
use App\Mengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = 'SELECT nama_matkul,namadosen,id_kelas,kelas FROM `mengajars`,`dosens`,`matakuliahs` WHERE mengajars.nipdosenwali = dosens.nip AND mengajars.kode_matkul = matakuliahs.kode_mk';
        $dsn = DB::select($query);
        return view('mengajars.index',compact('dsn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsn = dosen::pluck('namadosen','nip');
        $matk = matakuliah::pluck('nama_matkul','kode_mk');
        return view('mengajars.create',compact('dsn','matk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mengajar::create($request->all());
        return redirect('/mengajars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Mengajar $mengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ngajar    = Mengajar::findorfail($id);
        $dsn = dosen::pluck('namadosen','nip');
        $matk = matakuliah::pluck('nama_matkul','kode_mk');
        return view('mengajars.edit',compact('ngajar','dsn','matk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mengajar = Mengajar::findorfail($id);
        $mengajar->update($request->all());
        return redirect('/mengajars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mengajar  $mengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mengajar $mengajar)
    {
        $mengajar->delete();
        return redirect('/mengajars');
    }
}
