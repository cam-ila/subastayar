<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category as Category;

class CategoryTableSeeder extends Seeder {
  public function run()
  {
    Category::create(['name' => 'Ropa y Accesorios']);
    Category::create(['name' => 'Animales']);
    Category::create(['name' => 'Antigüedades']);
    Category::create(['name' => 'Otros']);
    Category::create(['name' => 'Alimentos']);
  }
}
