{!! Form::open(['url' => $url, 'method' => ($method == 'PUT' ? 'POST' : $method), 'files' => true]) !!}
  {!! $method == 'PUT' ? Form::input('hidden', '_method', $method) : '' !!}
  @include(str_plural($resource->model()).'.fields')
{!! Form::close() !!}
