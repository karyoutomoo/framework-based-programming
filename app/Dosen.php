<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $fillable = [
        'nip','namadosen'
    ];

    public function studentWali(){
        return $this->hasMany('App\Student','nipdosenwali','nip');
    }
}
