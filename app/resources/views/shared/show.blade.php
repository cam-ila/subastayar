@extends('app')
@section('content')

  @section('panel_body')
    {{ $resource }}
    {{-- {!! HTML::image($resource->imagePath() . $resource->image, $resource->title, ['class' => 'img-rounded img-responsive img-thumbnail']) !!} --}}
  @endsection {{-- end panel_body --}}

  @section('panel_actions')
  <div class="pull-right">
      {!! offer_link($resource) !!}
      {!! edit_link($resource) !!}
      {!! destroy_link($resource) !!}
  </div>
  @endsection {{-- end panel_actions --}}

  @include('shared.partials.panel', [
    'title'  => translate($resource->model()),
    'search' => false]
    )
@endsection {{-- end content --}}
