<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSkill extends Model
{
    protected $table='dataSkill';
    protected $fillable = [
        'platform','bahasapemrograman','deskripsi'
    ];
}
