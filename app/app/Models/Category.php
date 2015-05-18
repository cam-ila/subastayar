<?php namespace App\Models;

use App\Models\Base;

class Category extends Base {

  protected $main_attr = 'name';
  protected $table     = 'categories';
  protected $fillable  = ['name'];
  protected $visible   = ['name', 'created_at'];


  public function bids()
  {
    return $this->hasMany('App\Models\Bid');
  }

}
