{!! Form::open(['url' => route(str_plural($resource->model()).'.update', $resource), 'method' => $method]) !!}
  @include(str_plural($resource->model()).'.fields', ['resource' => $resource])
{!! Form::close() !!}
