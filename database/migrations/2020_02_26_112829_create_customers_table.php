<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('customer_id');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');  
            $table->string('middle_name')->nullable();  
            $table->string('last_name');  
            $table->string('gender');  
            $table->string('address')->nullable();  
            $table->timestamps();

            // Foreign Key from 'users' table
            $table->foreign('user_id')
                ->references('user_id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
