<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipSurat extends Model
{
    use HasFactory;
    protected $table = 'arsip_surat';

    protected $fillable = [
        'no_surat',
        'tgl_surat',
        'tgl_surat_masuk',
        'perihal',
        'departemen',
        'pengirim_surat',
        'file',
    ];
}
