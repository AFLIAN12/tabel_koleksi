<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusStrukturalsTable extends Migration
{
    public function up()
    {
        Schema::create('status_strukturals', function (Blueprint $table) {
            $table->tinyIncrements('id_status_struktural');
            $table->string('status_struktural', 5);
            $table->string('ket_struktural', 30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_strukturals');
    }
}
