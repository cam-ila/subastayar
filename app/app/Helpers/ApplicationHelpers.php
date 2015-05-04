<?php

use Illuminate\Support\Facades\Lang;


function t($message, $count = 1)
{
  return Lang::choice($message, $count);
}


function translate($key, $file = 'models')
{
  return t($file.'.'.$key);
}

function pluralize($key, $file = 'models')
{
  return t($file.'.'.$key, 2);
}

