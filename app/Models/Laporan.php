<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'nama_pelapor',
        'jenis_masalah',
        'lokasi',
        'deskripsi',
        'status'
    ];
}