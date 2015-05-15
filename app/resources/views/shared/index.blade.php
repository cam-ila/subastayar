@extends('app')
@section('content')

@section('panel_body')
  @foreach ($resources as $resource)
  <div class="row item">
    <div class="col-md-4">
      {!! link_to(route(str_plural($model) . '.show', $resource), $resource) !!}
    </div>
    <div class="col-md-8 text-right">
      {!! destroy_link($resource) !!}
    </div>
  </div>
  @endforeach
@endsection

@section('panel_actions')
<div class="pull-right">
  {!! create_link($model) !!}
</div>
@endsection
@include('shared.partials.panel', ['title' => pluralize($model), 'search' => true])
@endsection
