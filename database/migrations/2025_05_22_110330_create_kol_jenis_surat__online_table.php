<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolJenisSuratOnlineTable extends Migration
{
    public function up()
    {
        Schema::create('kol_jenis_surat_online', function (Blueprint $table) {
            $table->tinyIncrements('id_surat');
            $table->string('nama_surat', 255);
            $table->string('link_surat', 15);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_jenis_surat_online');
    }
}
