@extends('app')
@section('content')

  @section('panel_body')
    @include(str_plural($resource->model()).'.show_fields')
  @endsection {{-- end panel_body --}}

  @section('panel_actions')
  <div class="pull-right">
      {{-- @if(Auth::user()->canOffer($resource)) --}}
      {{--   {!! offer_link($resource) !!} --}}
      {{-- @endif --}}
      {{-- @if(Auth::user()->canEdit($resource)) --}}
      {{--   {!! edit_link($resource) !!} --}}
      {{--   {!! destroy_link($resource) !!} --}}
      {{-- @endif --}}
  </div>
  @endsection {{-- end panel_actions --}}

  @include('shared.partials.panel', [
    'title'  => translate($resource->model()),
    'search' => false]
    )
@endsection {{-- end content --}}
