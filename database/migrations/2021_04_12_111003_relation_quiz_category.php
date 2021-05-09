<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationQuizCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //begin add index to quizs
        Schema::table('quizs', function(Blueprint $table) {
            $table->bigInteger('id_cat')->unsigned()->index()->after('id');
            $table->foreign('id_cat')->references('id')->on('category');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quizs', function(Blueprint $table) {
            $table->dropIfExists('id_cat');
        });
    }
}
