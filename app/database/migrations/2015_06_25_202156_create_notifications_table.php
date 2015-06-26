<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
  public function up()
  {
    Schema::create('notifications', function (Blueprint $table) {
      // Columns
      $table->increments('id');
      $table->boolean('seen')->default(false);
      $table->string('message');
      $table->integer('user_id')->unsigned()->index();
      $table->timestamps();

      // Constraints
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::drop('notifications');
  }
}
