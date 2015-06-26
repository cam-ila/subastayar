<?php namespace App\Models;

use App\Models\Base;
use Carbon\Carbon as Carbon;

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

  public function sale()
  {
    return $this->hasOne('App\Models\Sale');
  }

  public function imagePath()
  {
    return '/uploads/img/';
  }

  public function scopeActive($query)
  {
    return $query->where('active', '=', true);
  }

  public function expired()
  {
    return Carbon::now() > $this->expires_at;
  }

  public function sold()
  {
    return $this->expired() && $this->sale != null;
  }

  public function deactivate()
  {
    $this->update(['active' => false]);
  }
}
