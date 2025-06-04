<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolPilihanProdiTable extends Migration
{
    public function up()
    {
        Schema::create('kol_pilihan_prodi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_prodi')->nullable();
            $table->integer('id_jurusan')->nullable();
            $table->string('nama_prodi', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_pilihan_prodi');
    }
}
