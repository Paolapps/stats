<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorner02InputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corner02_inputs', function (Blueprint $table) {
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
        Schema::dropIfExists('corner02_inputs');
    }
}
