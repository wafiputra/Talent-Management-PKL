<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPendidikan extends Model
{
    protected $table='datapendidikan';
    protected $fillable = [
        'idpengguna',
        'namasekolah',
        'jurusan',
        'tahunmasuk',
        'tahunlulus'
    ];
}
