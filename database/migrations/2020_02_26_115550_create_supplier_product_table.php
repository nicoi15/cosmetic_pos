<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_product', function (Blueprint $table) {
            $table->bigIncrements('supp_prod_id');
            $table->unsignedBigInteger('supplier_id');
            $table->string('product_id');
            $table->integer('quantity');
            $table->double('price');
            $table->timestamps();

            // Foreign Key from 'suppliers' table
            $table->foreign('supplier_id')
                ->references('supplier_id')
                ->on('suppliers');

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
        Schema::dropIfExists('supplier_product');
    }
}
