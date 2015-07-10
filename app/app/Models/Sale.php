<?php namespace App\Models;

use App\Models\Base;

class Sale extends Base {

  protected $table    = 'sales';
  protected $fillable = ['offer_id', 'bid_id'];

  public function offer()
  {
    return $this->belongsTo('App\Models\Offer');
  }

  public function bid()
  {
    return $this->belongsTo('App\Models\Bid');
  }

  public function buyer()
  {
    return $this->offer->user;
  }

  public function seller()
  {
    return $this->bid->user;
  }

  protected function asString()
  {
    $seller  = $this->seller();
    $product = $this->bid;
    return trans('models.sales.sold_by', compact('seller', 'product'));
  }

  public function scopeUnpayed($query)
  {
    return $query->where('payed', '=', false);
  }

}
