<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolJalurPmbTable extends Migration
{
    public function up()
    {
        Schema::create('kol_jalur_pmb', function (Blueprint $table) {
            $table->increments('id_jalur_pmb');
            $table->char('kode_pmb', 2);
            $table->string('nama_pmb', 100);
            $table->string('link', 20)->unique();
            $table->tinyInteger('aktif');
            $table->tinyInteger('id_feeder');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_jalur_pmb');
    }
}
