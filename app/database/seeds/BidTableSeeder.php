<?php

use Illuminate\Database\Seeder;


class BidTableSeeder extends Seeder {

  public function run()
  {
    $ropa = App\Category::whereName('Ropa y Accesorios')->first();

    App\User::whereEmail('ramirolamas@ramiro.com')->firstOrFail()->bids()->saveMany([
      new App\Bid([
        'title' => 'Guantes de acero',
        'description' => 'Guante de malla de acero inox. tejido, anticorte, marca *manulatex* de industria francesa',
        'category_id' => $ropa->id,
      ]),
      new App\Bid([
        'title' => 'Espejo',
        'description' => 'Espejo sin marco. Medidas: 0.8m x 1.2m',
        'category_id' => $ropa->id,
      ])
    ]);
  }

}