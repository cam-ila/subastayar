{!! Form::open(['url' => $url, 'method' => ($method == 'PUT' ? 'POST' : $method), 'files' => true]) !!}
  {!! Form::input('hidden', '_method', $method) !!}
  @include(str_plural($resource->model()).'.fields')
{!! Form::close() !!}
