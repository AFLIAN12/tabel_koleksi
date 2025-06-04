<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolJenisSkTable extends Migration
{
    public function up()
    {
        Schema::create('kol_jenis_sk', function (Blueprint $table) {
            $table->increments('id_jenis_sk');
            $table->string('nama_jenis_sk', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_jenis_sk');
    }
}
