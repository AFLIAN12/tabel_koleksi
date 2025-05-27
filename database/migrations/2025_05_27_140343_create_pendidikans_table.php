<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikansTable extends Migration
{
    public function up()
    {
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->char('id_pendidikan', 2)->primary();
            $table->string('nama_pendidikan', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendidikans');
    }
}
