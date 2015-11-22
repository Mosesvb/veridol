<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch_number');
            $table->integer('user_id');
            $table->string('mfg_date');
            $table->string('exp_date');
            $table->string('medication_name');
            $table->integer('medication_id')->unsigned()->index();
            $table->foreign('medication_id')->references('id')->on('medication')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('batch');
    }
}
