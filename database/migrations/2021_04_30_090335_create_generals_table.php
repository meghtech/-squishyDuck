<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->string('stripe_scret')->nullable();
            $table->string('stripe_pub')->nullable();
            $table->string('fa')->nullable();
            $table->string('tw')->nullable();
            $table->string('lin')->nullable();
            $table->string('buyer_com')->nullable();
            $table->string('seller_com')->nullable();
            $table->string('title')->nullable();
            $table->string('metaTag')->nullable();
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
        Schema::dropIfExists('generals');
    }
}
