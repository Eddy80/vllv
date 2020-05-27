<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->integer('lessoncount');
            $table->string('lessoncountbytext');
            $table->integer('durationdayscount');
            $table->string('durationbytext');
            $table->string('img');
            $table->string('link');
            $table->integer('discountprice')->default(0);
            $table->string('discountimg')->nullable();
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
        Schema::dropIfExists('packets');
    }
}
