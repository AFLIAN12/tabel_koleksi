<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusKalendersTable extends Migration
{
    public function up()
    {
        Schema::create('status_kalenders', function (Blueprint $table) {
            $table->increments('id_status_kalender');
            $table->char('status_kalender', 25);
            $table->string('ket', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_kalenders');
    }
}
