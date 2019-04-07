<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $primaryKey = 'kode_mk';
    public $incrementing = false;
    protected $fillable = [
        'kode_mk','nama_matkul','sks'
    ];

    public function mengajarMatkul(){
        return $this->hasMany('App\Mengajar','kode_matkul','kode_mk');
    }
}
