<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolSkemaLspTable extends Migration
{
    public function up()
    {
        Schema::create('kol_skema_lsp', function (Blueprint $table) {
            $table->tinyIncrements('id_skema_lsp');
            $table->tinyInteger('id_prodi');
            $table->string('nama_skema', 500);
            $table->string('skema', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_skema_lsp');
    }
}
