<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolPendidikanTable extends Migration
{
    public function up()
    {
        Schema::create('kol_pendidikan', function (Blueprint $table) {
            $table->char('id_pendidikan', 2)->primary();
            $table->string('nama_pendidikan', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_pendidikan');
    }
}
