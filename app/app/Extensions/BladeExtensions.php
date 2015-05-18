<?php namespace App\Extensions;

class BladeExtensions {

  public static function register()
  {
    \Blade::extend(function($view, $compiler) {
      return preg_replace('/\@eval\((.+)\)/', '<?php ${1}; ?>', $view);
    });
  }

}
