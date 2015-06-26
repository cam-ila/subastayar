<?php namespace App\Models;

use App\Models\Base;

class Notification extends Base
{

  protected $table     = 'notifications';
  protected $fillable  = ['user_id', 'message', 'seen'];
  protected $visible   = ['message'];
  protected $main_attr = 'message';

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

}
