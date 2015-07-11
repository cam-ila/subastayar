<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

  public function up()
  {
    Schema::create('users', function(Blueprint $table)
    {
      $table->increments('id');
      $table->string('name');
      $table->string('last_name');
      $table->string('email')->unique();
      $table->boolean('admin')->default(false);
      $table->string('password', 60);
      $table->rememberToken();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('users');
  }

}
