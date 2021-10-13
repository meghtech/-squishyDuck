<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Customer::class);
            $table->foreignIdFor(\App\Models\Seller::class);
            $table->foreignIdFor(\App\Models\Gig::class);
            $table->integer('amount');
            $table->integer('totalDay');
            $table->text('des')->nullable();
            $table->string('status')->default(1);
            $table->integer('is_approve')->default(1);
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
        Schema::dropIfExists('custom_offers');
    }
}
