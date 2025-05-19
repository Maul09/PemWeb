<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    //
    protected $fillable = [
        'nama_fakultas',
        'kode_fakultas',
        'dekan',
        'tahun_berdiri',
        'deskripsi',
        'jurusan', 
    ];

}
