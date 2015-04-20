<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('comments', function(Blueprint $table)
    {
      // Columns
      $table->increments('id');
      $table->text('body');
      $table->text('response')->nullable();
      $table->integer('user_id')->unsigned();
      $table->integer('product_id')->unsigned();
      $table->timestamps();

      // Constraints
      $table->foreign('user_id')->references('id')->on('users');
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
    Schema::drop('comments');
  }

}
