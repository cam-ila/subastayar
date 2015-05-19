{!! Form::open(['url' => $url, 'method' => ($method == 'PUT' ? 'POST' : $method), 'files' => true]) !!}
  {!! $method == 'PUT' ? Form::input('hidden', '_method', $method) : '' !!}
  @include('shared.partials.form_errors', compact('errors'))
  @include(str_plural($resource->model()).'.fields')
{!! Form::close() !!}
