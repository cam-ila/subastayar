<?php namespace App\Models;

use App\Models\Base;

class Role extends Base {

  protected $main_attr = 'name';
  protected $table     = 'roles';
  protected $fillable  = ['name', 'description'];

}
