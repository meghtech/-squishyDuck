<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generals', function (Blueprint $table) {
            $table->text('sub_header')->nullable();
            $table->text('sub_title')->nullable();
            $table->string('search_title')->nullable();
            $table->string('inside_input')->nullable();
            $table->string('fav_icon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('generals', function (Blueprint $table) {
            $table->dropColumn('sub_header');
            $table->dropColumn('sub_title');
            $table->dropColumn('search_title');
            $table->dropColumn('inside_input');
            $table->dropColumn('fav_icon');
        });
    }
}
