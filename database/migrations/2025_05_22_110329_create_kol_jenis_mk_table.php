<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolJenisMkTable extends Migration
{
    public function up()
    {
        Schema::create('kol_jenis_mk', function (Blueprint $table) {
            $table->char('id_jenis_mk', 1)->primary();
            $table->string('nama_jenis_mk', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_jenis_mk');
    }
}
