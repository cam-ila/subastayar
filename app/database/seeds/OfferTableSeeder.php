<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class OfferTableSeeder extends Seeder {

  public function run()
  {

    $ramiro = App\User::whereName('Ramiro Lamas')->firstOrFail();

    App\Bid::whereTitle('Guantes de acero')->firstOrFail()->offers()->saveMany([
      new App\offer([
        'body' => 'Soy carnicero y lamentablemente perdí un dedo trabajando. Me gustaría comprar el producto para que no me vuelva a ocurrir.',
        'user_id' => $ramiro->id
      ]),
      new App\offer([
        'body' => 'Soy carpintero y la necesito para cuando manejo la sierra.',
        'user_id' => App\User::whereName('Roberto Vegas')->firstOrFail()->id
      ])
    ]);
  }

}