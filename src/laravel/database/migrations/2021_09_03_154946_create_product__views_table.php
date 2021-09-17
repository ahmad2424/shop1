<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__views', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete()->cascadeOnUpdate() ;
            $table->foreignId('order_id')->nullable()->constrained('products')->cascadeOnDelete()->cascadeOnUpdate() ;
            $table->integer('view')->default(0);
            $table->integer('sold')->default(0);
            $table->json('order')->nullable();
            $table->integer('favorite')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product__views');
    }
}
