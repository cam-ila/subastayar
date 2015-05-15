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

function destroy_link($resource) {
  return link_to(route(str_plural($resource->model()) . '.edit', $resource), 'Editar', ['class' => 'btn btn-default']) .
    Form::open(['url' => route(str_plural($resource->model()) .'.destroy', $resource), 'class' => 'destroy-link']) .
    Form::input('hidden', '_method', 'DELETE') .
    Form::submit('Borrar', ['class' => 'btn btn-danger btn-destroy']) .
    Form::close() ;
}

function create_link($model) {
  return link_to(route(str_plural($model) . '.create'),
    trans('crud.titles.create',
    ['model' => translate($model)]), ['class' => 'btn btn-success']);
}
