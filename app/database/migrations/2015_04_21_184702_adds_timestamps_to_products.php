<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddsTimestampsToProducts extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('products', function(Blueprint $table)
    {
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
    Schema::table('products', function(Blueprint $table)
    {
      $table->dropColumn(['created_at', 'updated_at']);
    });
  }

}
