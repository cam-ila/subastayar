<?php

use Illuminate\Database\Seeder;


use App\Models\Category as Category;
use App\Models\User as User;
use App\Models\Bid as Bid;
use Carbon\Carbon as Carbon;

class BidTableSeeder extends Seeder {

  public function run()
  {
    $ropa      = Category::whereName('Ropa y Accesorios')->firstOrFail();
    $antig     = Category::whereName('Antigüedades')->firstOrFail();
    $animales  = Category::whereName('Animales')->firstOrFail();
    $otros     = Category::whereName('Otros')->firstOrFail();
    $alimentos = Category::whereName('Alimentos')->firstOrFail();

    User::whereEmail('carlosmaidana@carlos.com')->firstOrFail()->bids()->saveMany([
      new Bid([
        'title'       => 'Guantes de acero',
        'description' => 'Guante de malla de acero inox. tejido, anticorte, marca *manulatex* de industria francesa',
        'category_id' => $ropa->id,
        'image'       => 'guante.jpg',
        'created_at'  => Carbon::now()->subDays(2),
        'expires_at'  => Carbon::now()->addDays(3),
      ]),
        new Bid([
        'title'       => 'Celular ',
        'description' => 'Celular que lo tenia guardado desde hace varios años, anda',
        'category_id' => $antig->id,
        'image'       => 'sinimagen.jpg',
        'created_at'  => Carbon::now()->subDays(40),
        'expires_at'  => Carbon::now()->subDays(10),
        'active' => false,
      ])
     
    ]);

    User::whereEmail('ramirolamas@ramiro.com')->firstOrFail()->bids()->saveMany([
      new Bid([
        'title'       => 'Llama',
        'description' => 'Llama adulta oriunda de Tilcara. Es mansita',
        'category_id' => $animales->id,
        'image'       => 'llama.jpg',
        'created_at'  => Carbon::now()->subDays(2),
        'expires_at'  => Carbon::yesterday(),
        'active'      => false,
      ]),
       new Bid([
        'title'       => 'Espejo',
        'description' => 'Espejo sin marco. Medidas: 0.8m x 1.2m',
        'category_id' => $antig->id,
        'image'       => 'espejo.jpg',
        'created_at'  => Carbon::now()->subDays(15),
        'expires_at'  => Carbon::tomorrow(),
      ])
    ]);

    User::whereEmail('catalinaperez@catalina.com')->firstOrFail()->bids()->saveMany([
      new Bid([
        'title'       => 'Kriptonita',
        'description' => '200 gramos de Kriptonita',
        'category_id' => $otros->id,
        'image'       => 'kriptonita.jpg',
        'created_at'  => Carbon::now()->subDays(14),
        'expires_at'  => Carbon::yesterday(),
        'active'      => false,
      ]),
      new Bid([
        'title'       => 'Silla',
        'description' => 'Silla de computadora estandar, esta como nueva.',
        'category_id' => $otros->id,
        'image'       => 'silla.jpg',
        'created_at'  => Carbon::now()->subDays(14),
        'expires_at'  => Carbon::tomorrow(),
       ])
    ]);

    User::whereEmail('sergioramirez@sergioramirez.com')->firstOrFail()->bids()->saveMany([
      new Bid([
        'title'       => 'Aceite y Vinagre',
        'description' => '200ml de aceite y 300ml de vinagre. No incluye fascos',
        'category_id' => $alimentos->id,
        'image'       => 'aceite.jpg',
        'created_at'  => Carbon::now()->subDays(2),
        'expires_at'  => Carbon::yesterday(),
        'active'      => false,
      ]),
        new Bid([
        'title'       => 'Vino',
        'description' => 'un vino super antiguo que tenia tirado en el fonod',
        'category_id' => $alimentos->id,
        'image'       => 'sinimagen.jpg',
        'created_at'  => Carbon::now()->subDays(12),
        'expires_at'  => Carbon::yesterday(),
        'active'      => false,
      ])
        ]);

    User::whereEmail('mabelrimano@mabel.com')->firstOrFail()->bids()->saveMany([
      new Bid([
         'title'       => 'cajon',
        'description' => 'hermoso cajon de verduras',
        'category_id' => $otros->id,
        'image'       => 'sinimagen.jpg',
        'created_at'  => Carbon::now()->subDays(20),
        'expires_at'  => Carbon::now()->subDays(5),
        'active'      => false,
        ]),
      new Bid([
         'title'       => 'caja',
        'description' => 'caja de carton cuadrada de 50cm x 50 cm',
        'category_id' => $otros->id,
        'image'       => 'sinimagen.jpg',
        'created_at'  => Carbon::now()->subDays(20),
        'expires_at'  => Carbon::now()->subDays(1),
        'active'      => false,
        ])
      ]);

    
  }

}
