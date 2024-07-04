<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArsipSurat extends Model
{
    use HasFactory;
    protected $table = 'arsip_surat';

    protected $fillable = [
        'no_surat',
        'tgl_surat',
        'tgl_surat_masuk',
        'perihal',
        'departemen_id',
        'pengirim_surat_id',
        'berkas',
    ];

    public function departemen(): BelongsTo
    {
        return $this->belongsTo(Departemen::class);
    }

    public function pengirim_surat(): BelongsTo
    {
        return $this->belongsTo(PengirimSurat::class);
    }
}
