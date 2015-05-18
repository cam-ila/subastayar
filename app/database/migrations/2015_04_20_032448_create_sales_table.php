<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sales', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('offer_id')->unsigned()->index();
      $table->integer('bid_id')->unsigned()->index();
      $table->timestamps();

      // Constraints
      $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
      $table->foreign('bid_id')->references('id')->on('bids')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('sales');
  }

}
