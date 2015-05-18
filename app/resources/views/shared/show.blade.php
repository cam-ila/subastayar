@extends('app')
@section('content')

  @section('panel_body')
    {{ $resource }}
  @endsection {{-- end panel_body --}}

  @section('panel_actions')
  <div class="pull-right">
      {!! destroy_link($resource) !!}
  </div>
  @endsection {{-- end panel_actions --}}

  @include('shared.partials.panel', [
    'title'  => translate($resource->model()),
    'search' => false]
    )
@endsection {{-- end content --}}
