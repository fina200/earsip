<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuDinas extends Model
{
    use HasFactory;

    protected $table = 'tamu_dinas';

    protected $fillable = [
        'nama',
        'instansi',
        'tujuan',
        'saran',
    ];
}
