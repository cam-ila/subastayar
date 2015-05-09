<?php namespace App\Models;

use App\Models\Base;

class Offer extends Base {

  protected $main_attr = 'body';
  protected $table = 'offers';
  protected $fillable = ['body', 'prize', 'user_id'];

  public function user()
  {
    return $this->belongsTo('App\Models\User')->firstOrFail();
  }

  public function bid()
  {
    return $this->belongsTo('App\Models\Bid')->firstOrFail();
  }

  protected function asString()
  {
    $buyer   = $this->user();
    $product = $this->bid();
    return trans('models.offers.offered_by', compact('buyer', 'product'));
  }

}
