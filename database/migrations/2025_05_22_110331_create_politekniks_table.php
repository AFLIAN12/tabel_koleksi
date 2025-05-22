<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolitekniksTable extends Migration
{
    public function up()
    {
        Schema::create('politekniks', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_politeknik', 3)->nullable();
            $table->string('nama_politeknik', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('politekniks');
    }
}
