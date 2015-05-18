{{ $method }}
{!! Form::open(['url' => $url, 'method' => $method]) !!}
  @include(str_plural($resource->model()).'.fields')
{!! Form::close() !!}
