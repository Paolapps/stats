<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorner04InputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corner04_inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->double('time_sec', 10, 4);
            $table->string('hash_address');
            $table->integer('signal_db');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corner04_inputs');
    }
}
