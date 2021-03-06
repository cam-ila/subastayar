<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration {

  public function up()
  {
    Schema::create('bids', function(Blueprint $table)
    {
      // Columns
      $table->increments('id');
      $table->string('title');
      $table->string('description');
      $table->integer('user_id')->unsigned()->index();
      $table->integer('category_id')->unsigned()->index();
      $table->string('image');
      $table->timestamp('expires_at');
      $table->boolean('active')->default(true);
      $table->timestamps();

      // Constraints
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::drop('bids');
  }

}
