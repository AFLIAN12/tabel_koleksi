<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolBebasYudisiumTable extends Migration
{
    public function up()
    {
        Schema::create('kol_bebas_yudisium', function (Blueprint $table) {
            $table->tinyIncrements('id_yudisium');
            $table->string('ket', 20);
            $table->string('deskripsi', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_bebas_yudisium');
    }
}
