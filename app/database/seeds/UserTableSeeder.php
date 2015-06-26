<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

use App\Models\User as User;

class UserTableSeeder extends Seeder {

  public function run()
  {
    User::create(['name' => 'Ramiro'   , 'last_name' => 'Lamas'    , 'email' => 'ramirolamas@ramiro.com'          , 'password' => Hash::make('ramiro'), 'admin' => true]);
    User::create(['name' => 'Mariano'  , 'last_name' => 'Petrucci' , 'email' => 'marianopetrucci@mariano.com'     , 'password' => Hash::make('mariano')]);
    User::create(['name' => 'Mabel'    , 'last_name' => 'Rimano'   , 'email' => 'mabelrimano@mabel.com'           , 'password' => Hash::make('mabel')]);
    User::create(['name' => 'Roberto'  , 'last_name' => 'Vegas'    , 'email' => 'robertovegas@roberto.com'        , 'password' => Hash::make('roberto')]);
    User::create(['name' => 'Carlos'   , 'last_name' => 'Maidana'  , 'email' => 'carlosmaidana@carlos.com'        , 'password' => Hash::make('carlos')]);
    User::create(['name' => 'Catalina' , 'last_name' => 'Perez'    , 'email' => 'catalinaperez@catalina.com'      , 'password' => Hash::make('catalina')]);
    User::create(['name' => 'Sergio'   , 'last_name' => 'Ramirez'  , 'email' => 'sergioramirez@sergioramirez.com' , 'password' => Hash::make('sergio')]);
  }

}
