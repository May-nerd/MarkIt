<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('auctions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poster_id');
            $table->string('item_name');
            $table->text('description');
            $table->string('image_path');
            $table->string('image_extension');
            $table->integer('min_bid');
            $table->integer('auction_days');
            $table->integer('is_sold');
            $table->integer('sold_id')->nullable();
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
        Schema::dropIfExists('auctions');
    }
}
