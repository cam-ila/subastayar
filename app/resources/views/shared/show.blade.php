@extends('app')
@section('content')

  @section('panel_body')
    @include(str_plural($resource->model()).'.show_fields')
  @endsection {{-- end panel_body --}}

  @include('shared.partials.panel', [
    'title'  => translate($resource->model()),
    'search' => false]
    )
@endsection {{-- end content --}}
