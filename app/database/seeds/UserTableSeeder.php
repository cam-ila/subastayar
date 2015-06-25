<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

use App\Models\User as User;

class UserTableSeeder extends Seeder {

  public function run()
  {
    User::create(['name' => 'Ramiro Lamas'     , 'email' => 'ramirolamas@ramiro.com'          , 'password' => Hash::make('ramiro'), 'admin' => true]);
    User::create(['name' => 'Mariano Petrucci' , 'email' => 'marianopetrucci@mariano.com'     , 'password' => Hash::make('mariano')]);
    User::create(['name' => 'Mabel Rimano'     , 'email' => 'mabelrimano@mabel.com'           , 'password' => Hash::make('mabel')]);
    User::create(['name' => 'Roberto Vegas'    , 'email' => 'robertovegas@roberto.com'        , 'password' => Hash::make('roberto')]);
    User::create(['name' => 'Carlos Maidana'   , 'email' => 'carlosmaidana@carlos.com'        , 'password' => Hash::make('carlos')]);
    User::create(['name' => 'Catalina Perez'   , 'email' => 'catalinaperez@catalina.com'      , 'password' => Hash::make('catalina')]);
    User::create(['name' => 'Sergio Ramirez'   , 'email' => 'sergioramirez@sergioramirez.com' , 'password' => Hash::make('sergio')]);
  }

}
