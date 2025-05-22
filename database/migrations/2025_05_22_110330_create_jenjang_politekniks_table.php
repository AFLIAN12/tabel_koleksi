<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenjangPolitekniksTable extends Migration
{
    public function up()
    {
        Schema::create('jenjang_politekniks', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_jenjang', 3)->nullable();
            $table->string('nama_jenjang', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenjang_politekniks');
    }
}
