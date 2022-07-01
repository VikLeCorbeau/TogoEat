<?php

use App\Models\Meal;
use App\Models\Order;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderMealTable extends Migration
{
    /**
     * Run the migrations.
     * Create a new table linking the meals to their order with the ids
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_meal', function (Blueprint $table) {
            $table->primary('count');
            $table->integer('count')->default(0);
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('meal_id');
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
            // $table->foreign('order_id')->references('id')->on('orders');
            // $table->foreign(['order_id', 'meal_id']);
            // $table->foreignIdFor(Order::class)->constrained()->onDelete('cascade');
            // $table->foreignIdFor(Meal::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_meal');
    }
}
