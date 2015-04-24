<?php

use Illuminate\Database\Seeder;


class BidTableSeeder extends Seeder {

  public function run()
  {
    $ropa = App\Category::whereName('Ropa y Accesorios')->first();
    $antig = App\Category::whereName('Antigüedades')->first();
    $animales = App\Category::whereName('Animales')->first();
    $otros = App\Category::whereName('Otros')->first();
    $alimentos = App\Category::whereName('Alimentos')->first();


    App\User::whereEmail('carlosmaidana@carlos.com')->firstOrFail()->bids()->saveMany([
      new App\Bid([
        'title' => 'Llama',
        'description' => 'Guante de malla de acero inox. tejido, anticorte, marca *manulatex* de industria francesa',
        'category_id' => $ropa->id,
      ]),
      new App\Bid([
        'title' => 'Espejo',
        'description' => 'Espejo sin marco. Medidas: 0.8m x 1.2m',
        'category_id' => $antig->id,
      ])
    ]);

    App\User::whereEmail('catalinaperez@catalina.com')->firstOrFail()->bids()->saveMany([
      new App\Bid([
        'title' => 'Llama',
        'description' => 'Llama adulta oriunda de Tilcara. Es mansita',
        'category_id' => $animales->id,
      ]),
     new App\Bid([
        'title' => 'Kriptonita',
        'description' => '200 gramos de Kriptonita',
        'category_id' => $otros->id,
      ])
    ]);

    App\User::whereEmail('sergioramirez@sergioramirez.com')->firstOrFail()->bids()->saveMany([
      new App\Bid([
        'title' => 'Aceite y Vinagre',
        'description' => '200ml de aceite y 300ml de vinagre. No incluye fascos',
        'category_id' => $alimentos->id,
      ])
    ]);
  }

}
