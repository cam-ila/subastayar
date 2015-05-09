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

  protected function asString()
  {
    return $this->getAttribute($this->main_attr);
  }

  public function scopeSearch($query, $search)
  {
    $q = $query;
    if (!empty($search)) {
      // TODO: move this to a repository
      $q = $q->where($this->main_attr, 'LIKE', "%{$search}%");
    }

    return $q;
  }
}
