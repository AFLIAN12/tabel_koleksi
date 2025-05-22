<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihanProdisTable extends Migration
{
    public function up()
    {
        Schema::create('pilihan_prodis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_prodi')->nullable();
            $table->integer('id_jurusan')->nullable();
            $table->string('nama_prodi', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pilihan_prodis');
    }
}
