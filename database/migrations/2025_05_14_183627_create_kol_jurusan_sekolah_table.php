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
        Schema::create('kol_jurusan_sekolah', function (Blueprint $table) {
    $table->string('id_jurusan_sekolah', 50)->primary();
    $table->string('nama', 50)->nullable();
    $table->string('nama_jurusan', 100)->nullable();
    $table->enum('aktif', ['Y', 'N'])->default('N');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kol_jurusan_sekolah');
    }
};
