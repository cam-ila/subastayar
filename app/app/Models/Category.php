<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

  protected $table = 'categories';
  protected $fillable = ['name'];


  public function __toString()
  {
    return $this->name;
  }

  public function bids()
  {
    return $this->hasMany('App\Models\Bid');
  }

}
