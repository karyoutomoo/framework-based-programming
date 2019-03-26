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
}
