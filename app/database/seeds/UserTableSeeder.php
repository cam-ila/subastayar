<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder {

  public function run()
  {
    App\User::create(['name' => 'Ramiro Lamas', 'email' => 'ramirolamas@ramiro.com', 'password' => Hash::make('ramiro')]);
    App\User::create(['name' => 'Mariano Petrucci', 'email' => 'marianopetrucci@mariano.com', 'password' => Hash::make('mariano')]);
    App\User::create(['name' => 'Mabel Rimano', 'email' => 'mabelrimano@mabel.com', 'password' => 'mabel']);
    App\User::create(['name' => 'Roberto Vegas', 'email' => 'robertovegas@roberto.com', 'password' => 'roberto']);
  }

}