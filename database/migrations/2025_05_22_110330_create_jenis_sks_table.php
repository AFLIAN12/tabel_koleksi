<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisSksTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_sks', function (Blueprint $table) {
            $table->increments('id_jenis_sk');
            $table->string('nama_jenis_sk', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_sks');
    }
}
