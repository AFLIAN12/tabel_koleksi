<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolStatuseTable extends Migration
{
    public function up()
    {
        Schema::create('kol_statuse', function (Blueprint $table) {
            $table->smallIncrements('id_status');
            $table->string('nama_status', 15);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_statuse');
    }
}
