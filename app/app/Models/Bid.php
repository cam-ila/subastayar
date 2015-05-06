<?php namespace App\Models;

use App\Models\Base;

class Bid extends Base {

  protected $main_attr = 'title';
  protected $table     = 'bids';
  protected $fillable  = ['name', 'description', 'user_id'];


  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function category()
  {
    return $this->belongsTo('App\Models\Category');
  }

  public function offers()
  {
    return $this->hasMany('App\Models\Offer');
  }
}
