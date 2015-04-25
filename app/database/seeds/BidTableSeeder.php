<?php

use Illuminate\Database\Seeder;


use App\Models\Category as Category;
use App\Models\User as User;
use App\Models\Bid as Bid;

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
      ]),
      new Bid([
        'title'       => 'Espejo',
        'description' => 'Espejo sin marco. Medidas: 0.8m x 1.2m',
        'category_id' => $antig->id,
      ])
    ]);

    User::whereEmail('catalinaperez@catalina.com')->firstOrFail()->bids()->saveMany([
      new Bid([
        'title'       => 'Llama',
        'description' => 'Llama adulta oriunda de Tilcara. Es mansita',
        'category_id' => $animales->id,
      ]),
      new Bid([
        'title'       => 'Kriptonita',
        'description' => '200 gramos de Kriptonita',
        'category_id' => $otros->id,
      ])
    ]);

    User::whereEmail('sergioramirez@sergioramirez.com')->firstOrFail()->bids()->saveMany([
      new Bid([
        'title'       => 'Aceite y Vinagre',
        'description' => '200ml de aceite y 300ml de vinagre. No incluye fascos',
        'category_id' => $alimentos->id,
      ])
    ]);
  }

}
