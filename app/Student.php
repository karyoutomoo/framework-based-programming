<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'nrp';
    public $incrementing = false;
    protected $fillable = [
        'nrp','nama','nipdosenwali'
    ];

    public function dosenWali(){
        return $this->belongsTo('App\Dosen','nipdosenwali','nip');
    }
}
