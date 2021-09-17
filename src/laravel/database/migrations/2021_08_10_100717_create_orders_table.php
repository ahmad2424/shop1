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
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->dateTime('expire_at')->default(null);
            $table->enum('payment_state' , [ 'failed'  , 'success'  , 'pending'  , 'unpaid' ])->default( 'failed' ) ;
            $table->enum('delivery_state' , [ 'shop' , 'sent' , 'post' , 'received' , 'returned' ])->default( 'shop' ) ;
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
        Schema::dropIfExists('orders');
    }
}
