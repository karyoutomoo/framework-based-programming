<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengambil extends Model
{
    protected $primaryKey = 'id_krs';
    public $incrementing = false;
    protected $fillable = [
        'id_krs','nrpmhs','kelasdiambil','nilai'
    ];

    public function mhsAmbil(){
        return $this->belongsTo('App\Student','nrpmhs','nrp');
    }

    public function matkulDiambil(){
        return $this->belongsTo('App\Mengajar','kelasdiambil','id_kelas');
    }
}
