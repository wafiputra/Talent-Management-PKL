<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataP extends Model
{
    protected $table = 'dataproject';
    protected $fillable = [
        'nama',
        'nomorkontak',
        'platform',
        'tanggalmulai',
        'tanggalselesai',
        'deskripsi'
    ];
}
