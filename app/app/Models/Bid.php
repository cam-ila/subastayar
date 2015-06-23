<?php namespace App\Models;

use App\Models\Base;

class Bid extends Base {

  protected $main_attr = 'title';
  protected $table     = 'bids';
  protected $fillable  = ['title', 'description', 'user_id', 'category_id', 'image'];
  protected $visible   = ['title', 'description', 'category'];


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

  public function comments()
  {
    return $this->hasMany('App\Models\Comment');
  }

  public function imagePath()
  {
    return '/uploads/img/';
  }

  public function scopeActive($query)
  {
    return $query->where('active', '=', true);
  }
}
