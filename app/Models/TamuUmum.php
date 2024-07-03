<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuUmum extends Model
{
    use HasFactory;

    protected $table = 'tamu_umum';

    protected $fillable = [
        'nama',
        'instansi',
        'tujuan',
    ];
}
