@extends('app')

@section('content')

  @section('panel_body')
      @include('shared.partials.form', ['method' => 'PUT', 'url' => polymorphic_route($resource, 'show')])
  @endsection

  @include('shared.partials.panel', [
    'title'  => trans('crud.titles.edit', ['model' => translate($resource->model())]),
    'search' => false])

@endsection
