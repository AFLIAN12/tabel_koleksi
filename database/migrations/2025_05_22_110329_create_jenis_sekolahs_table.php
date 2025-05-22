<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisSekolahsTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_sekolahs', function (Blueprint $table) {
            $table->tinyInteger('id_jenis_sekolah')->primary();
            $table->string('nama_jenis_sekolah', 100)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_sekolahs');
    }
}
