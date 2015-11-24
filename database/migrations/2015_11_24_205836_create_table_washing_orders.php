<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWashingOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washing_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_of_clothes');
            $table->float('value');
            $table->integer('number');
            $table->date('delivery_date');
            $table->integer('customer_id')->unsigned();
            $table->string('status', 32);
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
        Schema::drop('washing_orders');
    }
}