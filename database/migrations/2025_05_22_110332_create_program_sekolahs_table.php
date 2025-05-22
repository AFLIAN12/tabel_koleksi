<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramSekolahsTable extends Migration
{
    public function up()
    {
        Schema::create('program_sekolahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prog')->nullable();
            $table->integer('id_bid')->nullable();
            $table->string('nama_program', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('program_sekolahs');
    }
}
