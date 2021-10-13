<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('seller_id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('totalDay');
            $table->string('image')->default('df');
            $table->string('multpleImage')->nullable();
            $table->string('price');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('gigs');
    }
}
