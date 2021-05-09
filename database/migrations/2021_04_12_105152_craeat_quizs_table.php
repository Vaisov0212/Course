<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeatQuizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quiz_img');
            $table->text('query');
            $table->string('ansver_1');
            $table->string('ansver_2');
            $table->string('ansver_3');
            $table->string('ansver_4');
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
        Schema::dropIfExists('quizs');
    }
}
