<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolJenisEvaluasiTable extends Migration
{
    public function up()
    {
        Schema::create('kol_jenis_evaluasi', function (Blueprint $table) {
            $table->tinyInteger('id_jenis_evaluasi')->primary();
            $table->string('nama_jenis_evaluasi', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_jenis_evaluasi');
    }
}
