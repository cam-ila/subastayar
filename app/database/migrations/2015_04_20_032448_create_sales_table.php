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
      $table->integer('offer_id')->unsigned();
      $table->integer('product_id')->unsigned();
      $table->timestamps();

      // Constraints
      $table->foreign('offer_id')->references('id')->on('offers');
      $table->foreign('product_id')->references('id')->on('products');
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
