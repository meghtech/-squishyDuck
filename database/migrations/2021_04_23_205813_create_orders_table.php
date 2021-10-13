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
            $table->foreignIdFor(\App\Models\Seller::class);
            $table->foreignIdFor(\App\Models\Customer::class);
            $table->foreignIdFor(\App\Models\Gig::class);
            $table->text('des');
            $table->integer('amount');
            $table->integer('totalDay');
            $table->integer('is_accept_buyer')->default(0);
            $table->integer('is_accept_seller')->default(0);
            $table->integer('payment_status')->default(0);
            $table->integer('status')->default(0);
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
