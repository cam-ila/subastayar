@extends('app')

@section('content')

  @section('panel_body')
      @include('shared.partials.form', ['method' => 'POST', 'url' => polymorphic_store_route($resource)])
  @endsection

  @include('shared.partials.panel', [
    'title'  => trans('crud.titles.create', ['model' => translate($resource->model())]),
    'search' => false]
    )

@endsection
