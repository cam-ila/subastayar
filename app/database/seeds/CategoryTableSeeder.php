<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryTableSeeder extends Seeder {
  public function run()
  {
    App\Category::create(['name' => 'Ropa y Accesorios']);
    App\Category::create(['name' => 'Animales']);
    App\Category::create(['name' => 'Antigüedades']);
    App\Category::create(['name' => 'Otros']);
    App\Category::create(['name' => 'Alimentos']);
  }
}
