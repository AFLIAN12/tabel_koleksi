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
        Schema::create('kol_kabupaten', function (Blueprint $table) {
    $table->char('id_kabupaten', 10)->primary();
    $table->string('nama_kabupaten', 50)->nullable();
    $table->char('id_provinsi', 2)->nullable();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kol_kabupaten');
    }
};
