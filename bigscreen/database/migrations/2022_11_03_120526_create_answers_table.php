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
        Schema::create('answers', function (Blueprint $table) {
            $table->id()
            ->autoIncrement();   
            $table->foreignId('question_id')
            ->references('id')
            ->on('questions');

            $table->foreignId('people_id')
            ->references('id')
            ->on('peoples');            

            $table->string('reponse_typeA')->nullable();
            $table->string('reponse_typeB')->nullable();
            $table->integer('reponse_typeC')->nullable();

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
        Schema::dropIfExists('answers');
    }
};
