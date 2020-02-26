<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSecurityQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_security_question', function (Blueprint $table) {
            $table->bigIncrements('usq_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sec_id');
            $table->timestamps();

            // Foreign Key from 'users' table
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');

            // Foreign Key from 'security_questions' table
            $table->foreign('sec_id')
                ->references('sec_id')
                ->on('security_questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_security_question');
    }
}
