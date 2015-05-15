@extends('app')

@section('content')

  @section('panel_body')
      @include('shared.partials.form', ['method' => 'PUT'])
  @endsection
  @include('shared.partials.panel', ['title' => trans('crud.titles.create', ['model' => translate($resource->model())]), 'search' => false])

@endsection
