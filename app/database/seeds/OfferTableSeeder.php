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
        'body'    => 'Soy carnicero y lamentablemente perdí un dedo trabajando. Me gustaría comprar el producto para que no me vuelva a ocurrir.',
        'user_id' => $ramiro->id
      ]),
      new App\offer([
        'body'    => 'Soy carpintero y la necesito para cuando manejo la sierra.',
        'user_id' => App\User::whereName('Roberto Vegas')->firstOrFail()->id
      ])
    ]);

    App\Bid::whereTitle('Llama')->firstOrFail()->offers()->save(
      new App\offer([
        'body'    => 'Siempre me gustaron los animales porque vivo solo y son buena compañia. Una llama es justo lo que necesito.',
        'user_id' => App\User::whereName('Mariano Petrucci')->firstOrFail()->id
      ])
    );

    App\Bid::whereTitle('Kriptonita')->firstOrFail()->offers()->save(
      new App\offer([
        'body'    => 'Odio a superman y si algún día lo llego a cruzar este producto me vendría al pelo.',
        'user_id' => App\User::whereName('Mabel Rimano')->firstOrFail()->id
      ])
    );

    App\Bid::whereTitle('Espejo')->firstOrFail()->offers()->save(
      new App\offer([
        'body'    => 'Siempre quise ser vampiro. Con este espejo no me convertiría en vampiro pero me ayudaría a sentirme uno.',
        'user_id' => $ramiro->id
      ])
    );
  }

}