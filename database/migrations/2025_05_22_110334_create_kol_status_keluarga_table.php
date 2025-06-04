<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolStatusKeluargaTable extends Migration
{
    public function up()
    {
        Schema::create('kol_status_keluarga', function (Blueprint $table) {
            $table->tinyIncrements('id_status_keluarga');
            $table->string('nama_status_keluarga', 20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_status_keluarga');
    }
}
