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
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->nullable(false);
            $table->string('nama_lengkap', 50);
            $table->string('nama_panggilan', 10);
            $table->string('jenis_kelamin', 10);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('alamat', 100);
            $table->string('no_hp', 15);
            $table->string('pendidikan', 30);
            $table->string('pekerjaan', 30);
            $table->enum('role', ['pasien', 'dokter', 'admin']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_users');
    }
};
