<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisAktifitasTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_aktifitas', function (Blueprint $table) {
            $table->increments('id_jenis_aktifitas');
            $table->string('nama_jenis_aktifitas', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_aktifitas');
    }
}
