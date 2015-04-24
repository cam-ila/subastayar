<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

  protected $table = 'comments';
  protected $fillable = ['body', 'response', 'user_id', 'bid_id'];

}
