<?php

use Illuminate\Support\Facades\Lang;
use App\Models\Notification as Notification;

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

function offer_link($resource)
{
  return Button::success()->withIcon(Icon::check())->withAttributes(['title' => 'ofertar', 'data-toggle' => 'tooltip'])
    ->asLinkTo(route('bids.offer.create', ['bid' => $resource]));
}

function sold_to_message($sale)
{
  return trans('models.offers.winner', ['product' => $sale->bid, 'link' => link_to(route('sales.pay', $sale->id), 'aqui')]);
}

function offered_by_message($resource)
{
  return 'Nueva oferta por el producto: ' . link_to(polymorphic_route($resource->bid, 'show'), $resource->bid);
}

function edit_link($resource, $url = null)
{
  return Button::normal()->withIcon(Icon::pencil())->withAttributes([
    'title' => 'editar',
    'data-toggle' => 'tooltip'
  ])->asLinkTo((isset($url) ? $url : polymorphic_route($resource, 'edit')));
}

function destroy_link($resource, $url = null)
{
  return Form::open([
    'url'    => (isset($url) ? $url : polymorphic_route($resource, 'destroy')),
    'class'  => 'destroy-link',
    'method' => 'DELETE'
    ]) .
    Button::danger()->withIcon(Icon::trash())->submit()->withAttributes([
      'class' => 'btn-form-submit',
      'title' => 'borrar',
      'data-toggle' => 'tooltip'
    ]) .
    Form::close();
}

function create_link($model, $url = null)
{
  return Button::success(trans('crud.titles.create', ['model' => translate($model)]))
    ->asLinkTo(route((isset($url) ? $url : str_plural($model) . '.create')));
}

function show_link($resource, $url = null)
{
  return Button::primary()->withAttributes(['title' => 'ver', 'data-toggle' => 'tooltip'])
    ->withIcon(Icon::eye_open())->asLinkTo((isset($url) ? $url : polymorphic_route($resource, 'show')));
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
  $options          = [];
  $options['image'] = avatarAsset();
  $options['link']  = '#';
  $options['body']  = $comment->body;
  if ($comment->response) {
    $options['nest'] = [
      'image' => avatarAsset(),
      'link'  => '#',
      'body'  => $comment->response
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

function polymorphic_edit_route($resource)
{
  return polymorphic_route($resource, 'edit');
}

/*
|--------------------------------------------------------------------------
| Notification Helpers
|--------------------------------------------------------------------------
 */

function notify($user_id, $message)
{
  return (new Notification([
    'user_id' => $user_id,
    'message' => $message
  ]))->save();
}
