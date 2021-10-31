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
            $table->unsignedBigInteger('user_id');
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('price')->nullable();
            $table->string('service_type')->nullable();
            $table->text('availability_days_with_time')->nullable();
            $table->text('description')->nullable();
            $table->text('tags')->nullable();
            $table->string('size')->nullable();
            $table->string('for_type')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('model_name')->nullable();
            $table->string('dimension')->nullable();
            $table->string('condition')->nullable();
            $table->string('company_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();
            $table->boolean('viaCall')->default(0);
            $table->boolean('viaText')->default(0);
            $table->text('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->text('delivery_detail')->nullable();
            $table->text('photos')->nullable();
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
