<?php namespace App\Models;

use App\Models\Base;
use App\Models\Offer as Offer;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Base implements AuthenticatableContract, CanResetPasswordContract {

  use Authenticatable, CanResetPassword;

  protected $main_attr = 'name';
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'email', 'password'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];

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
}
