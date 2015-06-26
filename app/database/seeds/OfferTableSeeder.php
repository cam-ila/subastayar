<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;
use App\Models\User as User;
use App\Models\Bid as Bid;
use App\Models\Offer as Offer;

class OfferTableSeeder extends Seeder {

  public function run()
  {

    $ramiro = User::whereName('Ramiro Lamas')->firstOrFail();

    Bid::whereTitle('Guantes de acero')->firstOrFail()->offers()->saveMany([
      new Offer([
        'body'    => 'Soy carnicero y lamentablemente perdí un dedo trabajando. Me gustaría comprar el producto para que no me vuelva a ocurrir.',
        'prize'   => 99,
        'user_id' => $ramiro->id
      ]),
      new Offer([
        'body'    => 'Soy carpintero y la necesito para cuando manejo la sierra.',
        'user_id' => User::whereName('Roberto Vegas')->firstOrFail()->id
      ])
    ]);

    Bid::whereTitle('Llama')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Siempre me gustaron los animales porque vivo solo y son buena compañia. Una llama es justo lo que necesito.',
        'user_id' => User::whereName('Mariano Petrucci')->firstOrFail()->id
      ])
    );

    Bid::whereTitle('Kriptonita')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Odio a superman y si algún día lo llego a cruzar este producto me vendría al pelo.',
        'user_id' => User::whereName('Mabel Rimano')->firstOrFail()->id
      ])
    );

    Bid::whereTitle('Espejo')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Siempre quise ser vampiro. Con este espejo no me convertiría en vampiro pero me ayudaría a sentirme uno.',
        'user_id' => $ramiro->id
      ])
    );
  }

}