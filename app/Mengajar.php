<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    protected $primaryKey = 'id_kelas';
    public $incrementing = false;
    protected $fillable = [
        'id_kelas','kode_matkul','nipdosenwali','kelas'
    ];

    public function dosenPengajar(){
        return $this->belongsTo('App\Dosen','nipdosenwali','nip');
    }

    public function mataKuliah(){
        return $this->belongsTo('App\matakuliah','kode_matkul','kode_mk');
    }

    public function ambilMatakuliah(){
        return $this->hasMany('App\Mengambil','kelasdiambil','id_kelas');
    }
}
