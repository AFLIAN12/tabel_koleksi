<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminalsTable extends Migration
{
    public function up()
    {
        Schema::create('terminals', function (Blueprint $table) {
            $table->tinyIncrements('id_terminal');
            $table->string('terminal', 255);
            $table->text('ket');
        });
    }

    public function down()
    {
        Schema::dropIfExists('terminals');
    }
}
