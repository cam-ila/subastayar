<?php namespace App\Models;

use App\Models\Base;

class Sale extends Model {

  protected $table    = 'sales';
  protected $fillable = ['offer_id', 'bid_id'];

  public function offer()
  {
    return $this->hasOne('App\Models\Offer');
  }

  public function bid()
  {
    return $this->hasOne('App\Models\Bid');
  }

  public function buyer()
  {
    return $this->offer()->user();
  }


  public function seller()
  {
    return $this->bid()->user();
  }

  public function asString()
  {
    $seller = $this->seller();
    $product = $this->bid();
    return trans('models.sales.sold_by', compact('seller', 'product'));
  }
}
