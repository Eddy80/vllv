<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessonvideos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lessonid');
            $table->integer('videoid');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->integer('durationinseconds')->nullable();
            $table->integer('viewcount')->default(0);
            $table->text('filename')->nullable();
            $table->string('preview')->nullable();
            $table->smallInteger('payed')->default(0);
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
        Schema::dropIfExists('lessonvideos');
    }
}
