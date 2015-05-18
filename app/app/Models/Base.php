<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model {

  // Subclasses must set $main_attribute
  protected $main_attr       = 'id';
  protected $printable_attrs = ['created_at'];

  public function model()
  {
    return strtolower(class_basename($this));
  }

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

  public function scopeSearch($query, $search)
  {
    $q = $query;
    if (!empty($search)) {
      // TODO: move this to a repository
      $q = $q->where($this->main_attr, 'LIKE', "%{$search}%");
    }

    return $q;
  }

  public function scopeSearchBetweenDates($query, $begin_date, $end_date)
  {
    // cast dates
    return $query->whereBetween('created_at', [$begin_date, $end_date]);
    // return $query->where('created_at', 'BETWEEN', $begin_date, $end_date /*cast dates*/);
  }

    /*
    |--------------------------------------------------------------------------
    | Representation
    |--------------------------------------------------------------------------
    */

  public function __toString()
  {
    return $this->asString();
  }

  protected function asString()
  {
    return $this->getAttribute($this->main_attr);
  }

  public function printableAttributes()
  {
    return $this->printable_attrs;
  }

}
