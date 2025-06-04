<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolProdiPoliteknikTable extends Migration
{
    public function up()
    {
        Schema::create('kol_prodi_politeknik', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_pilihan_prodi', 6)->nullable();
            $table->char('id_politeknik', 3)->nullable();
            $table->char('id_jenjang', 1)->nullable();
            $table->string('nama_prodi', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_prodi_politeknik');
    }
}
