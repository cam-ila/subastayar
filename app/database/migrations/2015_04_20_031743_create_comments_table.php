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
      $table->integer('user_id')->unsigned()->index();
      $table->integer('bid_id')->unsigned()->index();
      $table->timestamps();

      // Constraints
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
    Schema::drop('comments');
  }

}
