<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $fillable = [
        'nama',
        'instansi',
        'alamat',
        'provinsi',
        'kabupaten',
        'telepon',
        'email',
        'project'
    ];
}
