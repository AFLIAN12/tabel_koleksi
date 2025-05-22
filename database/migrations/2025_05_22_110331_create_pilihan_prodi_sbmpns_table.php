<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihanprodiSbmpnsTable extends Migration
{
    public function up()
    {
        Schema::create('pilihanprodi_sbmpns', function (Blueprint $table) {
            $table->integer('id_prodi');
            $table->integer('id_jurusan');
            $table->string('nama_prodi', 50)->nullable();
            $table->primary(['id_prodi', 'id_jurusan']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pilihanprodi_sbmpns');
    }
}
