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
            $table->text('des')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('totalDay')->nullable();
            $table->timestamp('schedule_date')->nullable();
            $table->boolean('is_accept_buyer')->default(0);
            $table->boolean('is_accept_seller')->default(0);
            $table->boolean('payment_status')->default(0);
            $table->boolean('status')->default(0);
            $table->string('morningTime')->nullable();
            $table->string('afternoonTime')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
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
