<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('transaction_id');
            $table->string('product_id');
            $table->double('price');
            $table->integer('quantity');

            // Foreign Key from 'transactions' table
            $table->foreign('transaction_id')
                ->references('transaction_id')
                ->on('transactions');

            // Foreign Key from 'products' table
            $table->foreign('product_id')
                ->references('product_id')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
