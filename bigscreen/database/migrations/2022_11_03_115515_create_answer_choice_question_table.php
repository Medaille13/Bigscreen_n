<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_choice_question', function (Blueprint $table) {
            $table->id()
            ->autoIncrement();      
            $table->foreignId('question_id')
                    ->references('id')
                    ->on('questions');
            $table->foreignId('answer_choice_id')
                    ->references('id')
                    ->on('answer_choices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_choice_question');
    }
};
