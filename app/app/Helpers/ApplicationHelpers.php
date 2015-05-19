<?php

use Illuminate\Support\Facades\Lang;

/*
|--------------------------------------------------------------------------
| Translation Helpers
|--------------------------------------------------------------------------
 */

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

/*
|--------------------------------------------------------------------------
| View Helpers
|--------------------------------------------------------------------------
 */

function edit_link($resource)
{
  return Button::normal()->withIcon(Icon::pencil())->asLinkTo(polymorphic_edit_route($resource));
}

function destroy_link($resource)
{
  return Form::open([
    'url'   => polymorphic_route($resource, 'destroy'),
      'class' => 'destroy-link'
    ]) .
    Form::input('hidden', '_method', 'DELETE') .
    Button::danger()->withIcon(Icon::trash())->submit()->withAttributes(['class' => 'btn-destroy']);
  Form::close();
}

function create_link($model)
{
  return Button::success(trans('crud.titles.create', ['model' => translate($model)]))
    ->asLinkTo(route(str_plural($model) . '.create'));
}

function show_link($resource)
{
  return Button::primary()->withIcon(Icon::eye_open())->asLinkTo(polymorphic_route($resource, 'show'));
}

function too_long($string)
{
  return (strlen($string) > 25);
}

function nice_date($date)
{
  return date('d F, Y', strtotime($date));
}


/*
|--------------------------------------------------------------------------
| Route Helpers
|--------------------------------------------------------------------------
 */

function polymorphic_route($resource, $route_name)
{
  return route(str_plural($resource->model()) . '.' . $route_name, $resource);
}

function polymorphic_store_route($resource)
{
  return polymorphic_route($resource, 'store');
}

function polymorphic_edit_route($resource)
{
  return polymorphic_route($resource, 'edit');
}

