<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;
use Carbon\Carbon as Carbon;
use App\Models\User as User;

class UserTableSeeder extends Seeder {

  public function run()
  {
    User::create([
      'name'       => 'Ramiro' ,
      'last_name'  => 'Lamas' ,
      'email'      => 'ramirolamas@ramiro.com' ,
      'password'   => Hash::make('ramiro'),
      'admin'      => true,
      'created_at' => Carbon::now()->subDays(2)
    ]);
    User::create([
      'name'      => 'Mariano' ,
      'last_name' => 'Petrucci' ,
      'email'     => 'marianopetrucci@mariano.com' ,
      'password'  => Hash::make('mariano'),
      'created_at' => Carbon::now()->subDays(10)
    ]);
    User::create([
      'name'      => 'Mabel' ,
      'last_name' => 'Rimano' ,
      'email'     => 'mabelrimano@mabel.com' ,
      'password'  => Hash::make('mabel'),
      'created_at' => Carbon::now()->subDays(9)
    ]);
    User::create([
      'name'      => 'Roberto' ,
      'last_name' => 'Vegas' ,
      'email'     => 'robertovegas@roberto.com' ,
      'password'  => Hash::make('roberto'),
      'created_at' => Carbon::now()->subDays(10)
    ]);
    User::create([
      'name'      => 'Carlos' ,
      'last_name' => 'Maidana' ,
      'email'     => 'carlosmaidana@carlos.com' ,
      'password'  => Hash::make('carlos'),
      'created_at' => Carbon::now()->subDays(2)
    ]);
    User::create([
      'name'      => 'Catalina' ,
      'last_name' => 'Perez' ,
      'email'     => 'catalinaperez@catalina.com' ,
      'password'  => Hash::make('catalina'),
      'created_at' => Carbon::now()->subDays(1)
    ]);
    User::create([
      'name'      => 'Sergio' ,
      'last_name' => 'Ramirez' ,
      'email'     => 'sergioramirez@sergioramirez.com' ,
      'password'  => Hash::make('sergio')
    ]);
  }

}
