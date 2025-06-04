<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolBidangSekolahTable extends Migration
{
    public function up()
    {
        Schema::create('kol_bidang_sekolah', function (Blueprint $table) {
            $table->integer('id_jurusan')->primary();
            $table->integer('id_sekolah')->nullable();
            $table->string('nama_jurusan', 50)->nullable();
            $table->string('ket', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_bidang_sekolah');
    }
}
