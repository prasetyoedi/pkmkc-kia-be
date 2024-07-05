<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained()->onDelete('cascade')->nullable(false);
            $table->date('tanggal_pemeriksaan');
            $table->string('tinggi_badan', 10);
            $table->string('berat_badan', 10);
            $table->string('tekanan_darah', 10);
            $table->string('lingkar_lengan_atas', 10);
            $table->string('denyut_jantung', 10);
            $table->string('hb_darah', 10);
            $table->string('gula_darah', 10);
            $table->date('hpht');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};