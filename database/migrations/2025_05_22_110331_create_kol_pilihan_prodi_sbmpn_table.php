<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolPilihanprodiSbmpnTable extends Migration
{
    public function up()
    {
        Schema::create('kol-pilihanprodi_sbmpn', function (Blueprint $table) {
            $table->integer('id_prodi');
            $table->integer('id_jurusan');
            $table->string('nama_prodi', 50)->nullable();
            $table->primary(['id_prodi', 'id_jurusan']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_pilihanprodi_sbmpn');
    }
}
