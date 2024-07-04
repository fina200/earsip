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
            $table->date('tgl_surat');
            $table->date('tgl_surat_masuk');
            $table->string('perihal');
            $table->foreignid('departemen_id')
                ->constrained('departemen')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignid('pengirim_surat_id')
                ->constrained('pengirim_surat')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->string('berkas');
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
