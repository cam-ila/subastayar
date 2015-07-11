<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration {

  public function up()
  {
    Schema::create('offers', function(Blueprint $table)
    {
      // Columns
      $table->increments('id');
      $table->text('body');
      $table->integer('prize')->default(0);
      $table->integer('user_id')->unsigned()->index();
      $table->integer('bid_id')->unsigned()->index();
      $table->timestamps();

      // Constraints
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('bid_id')->references('id')->on('bids')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::drop('offers');
  }

}
