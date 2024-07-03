<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('arsip_surat', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->string('tgl_surat');
            $table->string('tgl_surat_masuk');
            $table->string('perihal');
            $table->string('departemen');
            $table->string('pengirim_surat');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsip_surat');
    }
};