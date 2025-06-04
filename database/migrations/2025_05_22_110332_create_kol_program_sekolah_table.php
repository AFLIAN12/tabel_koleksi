<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolProgramSekolahTable extends Migration
{
    public function up()
    {
        Schema::create('kol_program_sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prog')->nullable();
            $table->integer('id_bid')->nullable();
            $table->string('nama_program', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_program_sekolah');
    }
}
