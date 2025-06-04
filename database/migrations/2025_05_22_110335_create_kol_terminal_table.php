<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolTerminalTable extends Migration
{
    public function up()
    {
        Schema::create('kol_terminal', function (Blueprint $table) {
            $table->tinyIncrements('id_terminal');
            $table->string('terminal', 255);
            $table->text('ket');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_terminal');
    }
}
