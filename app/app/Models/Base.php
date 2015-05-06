<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model {

  // Subclasses must set $main_attribute
  protected $main_attr = 'id';

  public function model()
  {
    return strtolower(class_basename($this));
  }

  public function __toString()
  {
    return $this->asString();
  }

  public function asString()
  {
    $this->getAttribute($this->main_attr);
  }
}
