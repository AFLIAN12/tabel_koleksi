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
        Schema::create('kol_agama', function (Blueprint $table) {
    $table->tinyInteger('id_agama')->primary();
    $table->string('nama_agama', 100);
    $table->tinyInteger('id_feeder')->nullable();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kol_agama');
    }
};
