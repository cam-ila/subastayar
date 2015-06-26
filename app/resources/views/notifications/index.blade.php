@extends('app')
@section('content')

  @section('panel_body')
    @if(!$resources->count() == 0)
      @include(str_plural($resources->first()->model()).'.table')
    @else
    <div class="alert alert-warning">
      <p>{{ trans('messages.no_records') }}</p>
    </div>
    @endif
  @endsection

  @include('shared.partials.panel', ['title' => pluralize($model), 'search' => false])

@endsection
