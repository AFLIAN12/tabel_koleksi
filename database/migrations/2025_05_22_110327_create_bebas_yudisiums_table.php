<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBebasYudisiumsTable extends Migration
{
    public function up()
    {
        Schema::create('bebas_yudisiums', function (Blueprint $table) {
            $table->tinyIncrements('id_yudisium');
            $table->string('ket', 20);
            $table->string('deskripsi', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('bebas_yudisiums');
    }
}
