<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolAsalSekolahTable extends Migration
{
    public function up()
    {
        Schema::create('kol_asal_sekolah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sekolah')->nullable();
            $table->string('nama_sekolah', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_asal_sekolah');
    }
}
