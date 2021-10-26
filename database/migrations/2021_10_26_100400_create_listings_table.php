<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('type');
            $table->string('title');
            $table->string('price');
            $table->string('service_type');
            $table->string('availability_days_with_time');
            $table->text('description');
            $table->text('tags');
            $table->string('size');
            $table->string('for_type');
            $table->string('manufacture');
            $table->string('model_name');
            $table->string('length');
            $table->string('condition');
            $table->string('contact_email');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_type');
            $table->text('address');
            $table->string('city');
            $table->string('street_zip');
            $table->string('zip_code');
            $table->text('delivery_detail');
            $table->text('photos');
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
        Schema::dropIfExists('listings');
    }
}
