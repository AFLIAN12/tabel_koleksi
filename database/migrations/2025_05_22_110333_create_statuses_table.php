<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->smallIncrements('id_status');
            $table->string('nama_status', 15);
        });
    }

    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
