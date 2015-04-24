<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder {

  public function run()
  {
    App\User::create(['name' => 'Ramiro Lamas'     , 'email' => 'ramirolamas@ramiro.com'          ,  'password' => Hash::make('ramiro')]);
    App\User::create(['name' => 'Mariano Petrucci' , 'email' => 'marianopetrucci@mariano.com'     ,  'password' => Hash::make('mariano')]);
    App\User::create(['name' => 'Mabel Rimano'     , 'email' => 'mabelrimano@mabel.com'           ,  'password' => Hash::make('mabel')]);
    App\User::create(['name' => 'Roberto Vegas'    , 'email' => 'robertovegas@roberto.com'        ,  'password' => Hash::make('roberto')]);
    App\User::create(['name' => 'Carlos Maidana'   , 'email' => 'carlosmaidana@carlos.com'        ,  'password' => Hash::make('carlos')]);
    App\User::create(['name' => 'Catalina Perez'   , 'email' => 'catalinaperez@catalina.com'      ,  'password' => Hash::make('catalina')]);
    App\User::create(['name' => 'Sergio Ramirez'   , 'email' => 'sergioramirez@sergioramirez.com' ,  'password' => Hash::make('sergio')]);
  }

}
