<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolBulanTable extends Migration
{
    public function up()
    {
        Schema::create('kol_bulan', function (Blueprint $table) {
            $table->tinyInteger('no_bln')->primary();
            $table->string('nama_bln', 20);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_bulan');
    }
}
