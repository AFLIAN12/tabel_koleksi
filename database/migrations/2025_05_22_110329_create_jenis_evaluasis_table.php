<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisEvaluasisTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_evaluasis', function (Blueprint $table) {
            $table->tinyInteger('id_jenis_evaluasi')->primary();
            $table->string('nama_jenis_evaluasi', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_evaluasis');
    }
}
