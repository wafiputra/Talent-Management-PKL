<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'kategori', 'keterangan'
    ];

    protected $table = 'bidang';
}
