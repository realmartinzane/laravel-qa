<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) 
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('title'); 
            $table->text('body');
            $table->string('slug')->unique();
            $table->integer('views')->unsigned()->default(0);
            $table->integer('votes')->default(0);
            $table->integer('answers')->unsigned()->default(0);
            $table->bigInteger('best_answer_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('questions', function(Blueprint $table) 
        {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
