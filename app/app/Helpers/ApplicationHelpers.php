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
function comment_link ($resource)
{
  return Button::normal()->withIcon(Icon::comment())->withAttributes([
    'title' => 'comentar', 
    'data-toggle' => 'tooltip'
  ]) -> asLinkTo (route('comments.create',  ['bid' => $resource] ));
}
function offer_link($resource)
{
  return Button::success()->withIcon(Icon::check())->withAttributes(['title' => 'ofertar', 'data-toggle' => 'tooltip'])
    ->asLinkTo(route('bids.offer.create', ['bid' => $resource]));
}

function edit_link($resource)
{
  return Button::normal()->withIcon(Icon::pencil())->withAttributes([
    'title' => 'editar', 
    'data-toggle' => 'tooltip'
  ])->asLinkTo(polymorphic_edit_route($resource));
}

function destroy_link($resource)
{
  return Form::open([
    'url'   => polymorphic_route($resource, 'destroy'),
      'class' => 'destroy-link'
    ]) .
    Form::input('hidden', '_method', 'DELETE') .
    Button::danger()->withIcon(Icon::trash())->submit()->withAttributes([
      'class' => 'btn-destroy',
      'title' => 'borrar',
      'data-toggle' => 'tooltip'
    ]) .
    Form::close();
}

function create_link($model)
{
  return Button::success(trans('crud.titles.create', ['model' => translate($model)]))
    ->asLinkTo(route(str_plural($model) . '.create'));
}

function show_link($resource)
{
  return Button::primary()->withAttributes(['title' => 'ver', 'data-toggle' => 'tooltip'])
    ->withIcon(Icon::eye_open())->asLinkTo(polymorphic_route($resource, 'show'));
}

function too_long($string)
{
  return (strlen($string) > 25);
}

function nice_date($date)
{
  return date('d F, Y', strtotime($date));
}

function avatarAsset()
{
  return '/img/avatar-blank.jpg';
}

function avatarImg()
{
  return HTML::image(avatarAsset(), 'avatar', ['class' => 'img-rounded img-responsive img-thumbnail']) ;
}

function mediaObjectOptions($comment)
{
  $options            = [];
  $options['image']   = avatarAsset();
  $options['link']    = '#';
  $options['heading'] = $comment->user;
  $options['body']    = $comment->body;
  if ($comment->response) {
    $options['nest'] = [
      'image'   => avatarAsset(),
      'link'    => '#',
      'heading' => $comment->bid->user,
      'body'    => $comment->response
      ];
  }
  return $options;
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

function 
polymorphic_edit_route($resource)
{
  return polymorphic_route($resource, 'edit');
}

