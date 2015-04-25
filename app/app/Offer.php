<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model {

  protected $table = 'offers';
  protected $fillable = ['body', 'prize', 'user_id'];

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
