@extends('app')
@section('content')

  @section('search_bar')
    @include('shared.partials.search', ['query' => $query, 'model' => $model, 'navbar' => true])
  @endsection

  @section('panel_body')
    @if(!$resources->count() == 0)
      @include(str_plural($resources->first()->model()).'.table')
    @else
    <div class="alert alert-warning">
      <p>{{ trans('no_records') }}</p>
    </div>
    @endif
  @endsection

  @section('panel_actions')
  <div class="pull-right">
    @if($model != 'offer')
      {!! create_link($model) !!}
    @endif
  </div>
  @endsection

  @include('shared.partials.panel', ['title' => pluralize($model), 'search' => false])

@endsection
