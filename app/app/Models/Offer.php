<?php namespace App\Models;

use App\Models\Base;

class Offer extends Base {

  protected $main_attr = 'body';
  protected $table     = 'offers';
  protected $fillable  = ['body', 'prize', 'user_id', 'bid_id'];
  protected $visible   = ['body', 'user', 'bid'];

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function bid()
  {
    return $this->belongsTo('App\Models\Bid');
  }

  public function sale()
  {
    return $this->hasOne('App\Models\Sale');
  }

  protected function asString()
  {
    $buyer   = $this->user()->first();
    $product = $this->bid()->first();
    return trans('models.offers.offered_by', compact('buyer', 'product'));
  }

}
