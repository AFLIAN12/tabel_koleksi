<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolJenjangPoliteknikTable extends Migration
{
    public function up()
    {
        Schema::create('kol_jenjang_politeknik', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_jenjang', 3)->nullable();
            $table->string('nama_jenjang', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_jenjang_politeknik');
    }
}
