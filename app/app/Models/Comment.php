<?php namespace App\Models;

use App\Models\Base;

class Comment extends Base {

  protected $main_attr = 'body';
  protected $table     = 'comments';
  protected $fillable  = ['body', 'response', 'user_id', 'bid_id'];

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function bid()
  {
    return $this->belongsTo('App\Models\Bid');
  }

}
