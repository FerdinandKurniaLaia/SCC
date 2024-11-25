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
        Schema::create('kelola_pelamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tgl_lahir'); 
            $table->text('alamat_sekarang');
            $table->string('email');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('kompetensi');
            $table->string('sertifikat');
            $table->string('cv');
            $table->date('tanggal_verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelola_pelamars');
    }
};
