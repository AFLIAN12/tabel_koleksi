<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKolHubunganTable extends Migration
{
    public function up()
    {
        Schema::create('kol_hubungan', function (Blueprint $table) {
            $table->integer('id_hubungan')->primary();
            $table->string('nama_hubungan', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kol_hubungan');
    }
}