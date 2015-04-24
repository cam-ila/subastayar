<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model {

  protected $table = 'bids';
  protected $fillable = ['name', 'description', 'user_id'];

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function category()
  {
    return $this->belongsTo('App\Category');
  }
}
