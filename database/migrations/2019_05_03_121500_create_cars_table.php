<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->float('price');
            $table->string('img_url');
            $table->string('description_text');
            $table->integer('color_id')->unsigned();
            // $table->foreign('color_id')->references('id')->on('colors');
            $table->integer('model_id')->unsigned();
            // $table->foreign('model_id')->references('id')->on('model_tables');
            $table->string('series')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
