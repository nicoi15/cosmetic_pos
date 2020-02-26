<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->primary('transaction_id');
            $table->string('transaction_id');
            $table->string('remarks')->nullable();
            $table->double('total_amount');
            $table->double('payment_amount');
            $table->double('change');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('transactions');
    }
}
