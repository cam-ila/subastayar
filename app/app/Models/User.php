<?php namespace App\Models;

use App\Models\Base;
use App\Models\Offer as Offer;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Base implements AuthenticatableContract, CanResetPasswordContract {

  use Authenticatable, CanResetPassword, SoftDeletes;

  protected $main_attr = 'name';
  protected $table = 'users';
  protected $fillable = ['name', 'email', 'password'];
  protected $hidden = ['password', 'remember_token'];
  protected $dates   = ['deleted_at'];

  public function bids()
  {
    return $this->hasMany('App\Models\Bid');
  }

  public function offers()
  {
    return $this->hasMany('App\Models\Offer');
  }

  public function notifications()
  {
    return $this->hasMany('App\Models\Notification');
  }

  public function canEdit($resource)
  {
    return $resource->user == $this;
  }

  public function canOffer($bid)
  {
    return $bid->user != $this && ! $this->hasOffersFor($bid);
  }

  public function hasOffersFor($bid)
  {
    return (Offer::where(['user_id' => $this->id, 'bid_id' => $bid->id])->count()) >= 1;
  }

  public function notificationCount()
  {
    return Notification::whereUserId($this->id)->whereSeen(false)->count();
  }

  public function fullName()
  {
    return $this->name . ' ' . $this->last_name;
  }

  public function asString()
  {
    return $this->fullName();
  }

  public function activeBids()
  {
    return $this->bids()->where(['active' => true]);
  }

  public function unpayedOffers()
  {
    return $this->offers()->whereIn(
      'id', Sale::unpayed()->whereIn(
        'bid_id', $this->bids()->lists('id')->toArray()
      )->lists('offer_id')->toArray()
    );
  }

  public function activeOffers()
  {
    return $this->offers()->whereIn('bid_id', Bid::active()->lists('id'));
  }
}
