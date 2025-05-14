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
        Schema::create('kol_wilayah', function (Blueprint $table) {
    $table->char('id_wil', 8)->primary();
    $table->string('nm_wil', 50);
    $table->string('id_induk_wilayah', 50)->nullable();
    $table->integer('id_level_wil');
    $table->index('id_induk_wilayah');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kol_wilayah');
    }
};
