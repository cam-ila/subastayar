<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model {

  protected $table = 'bids';
  protected $fillable = ['name', 'description', 'user_id'];

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
