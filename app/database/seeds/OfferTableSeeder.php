<?php

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;
use App\Models\User as User;
use App\Models\Bid as Bid;
use App\Models\Offer as Offer;

class OfferTableSeeder extends Seeder {

  public function run()
  {

    $ramiro = User::whereName('Ramiro')->firstOrFail();
    $catalina = User::whereName('Catalina')->firstOrFail();

    Bid::whereTitle('Guantes de acero')->firstOrFail()->offers()->saveMany([
      new Offer([
        'body'    => 'Soy carnicero y lamentablemente perdí un dedo trabajando. Me gustaría comprar el producto para que no me vuelva a ocurrir.',
        'prize'   => 99,
        'user_id' => $ramiro->id
      ]),
      new Offer([
        'body'    => 'Soy carpintero y la necesito para cuando manejo la sierra.',
        'prize'   => 100,
        'user_id' => User::whereName('Roberto')->firstOrFail()->id
      ]),
       new Offer([
        'body'    => 'Hola, hago jardineria y mis manos te lo agradecerian. Gracias!',
        'user_id' => $catalina->id
      ])
    ]);

    Bid::whereTitle('Llama')->firstOrFail()->offers()->saveMany([
      new Offer([
        'body'    => 'Siempre me gustaron los animales porque vivo solo y son buena compañia. Una llama es justo lo que necesito.',
        'prize'   => 9,
        'user_id' => User::whereName('Mariano')->firstOrFail()->id

      ]),
       new Offer([
        'body'    => 'No es que la quiero, la necesito, me hace acordar a la llama que llama',
        'prize'   => 892,
        'user_id' => $catalina->id 
      ])
    ]);

    Bid::whereTitle('Kriptonita')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Odio a superman y si algún día lo llego a cruzar este producto me vendría al pelo.',
        'prize'   => 123,
        'user_id' => User::whereName('Mabel')->firstOrFail()->id
      ])
    );

     Bid::whereTitle('Kriptonita')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Soy administrador y merezco tener la posibilidad de matar a superman',
        'prize'   => 987,
        'user_id' => $ramiro->id
      ])
    );

    Bid::whereTitle('Espejo')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Siempre quise ser vampiro. Con este espejo no me convertiría en vampiro pero me ayudaría a sentirme uno.',
        'prize'   => 2,
        'user_id' => $catalina->id
      ])
     );

     Bid::whereTitle('Aceite y Vinagre')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Quiero el aceite',
        'prize'   => 2,
        'user_id' => $catalina->id
      ])
    );

     Bid::whereTitle('Vino')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Quiero ese vinito',
        'prize'   => 200,
        'user_id' => $ramiro->id
      ])
    );

    Bid::whereTitle('Cajon')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Lo quiero para decorarlo',
        'prize'   => 50,
        'user_id' => $ramiro->id
      ])
    );

    Bid::whereTitle('Caja')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Wooow, es justo lo que necesito',
        'prize'   => 10,
        'user_id' => User::whereName('Carlos')->firstOrFail()->id
      ])
    );

      Bid::whereTitle('Celular')->firstOrFail()->offers()->save(
      new Offer([
        'body'    => 'Me vendria perfecto ya que nunca me amige con la tecnologia!',
        'prize'   => 99,
        'user_id' => User::whereName('Mariano')->firstOrFail()->id
      ])
    );
    
  }

}