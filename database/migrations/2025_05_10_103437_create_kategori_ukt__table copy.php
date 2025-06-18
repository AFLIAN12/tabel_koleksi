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
        Schema::create('tabel_kategori_ukt', function (Blueprint $table) {
            $table->string('id_kategori_ukt', 10)->primary(); // varchar, primary key
            $table->tinyInteger('id_prodi');
            $table->string('kategori_ukt', 100);
            $table->unsignedInteger('nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_kategori_ukt');
    }
};