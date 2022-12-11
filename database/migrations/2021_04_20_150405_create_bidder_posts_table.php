<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidderPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidder_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\JobPost::class);
            $table->foreignIdFor(\App\Models\Seller::class);
            $table->foreignIdFor(\App\Models\Gig::class);
            $table->text('des');
            $table->string('totalDay');
            $table->string('amount');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('bidder_posts');
    }
}
