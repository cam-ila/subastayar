{!! Form::open(['url' => route(str_plural($model).'.index'), 'method' => 'GET', 'class' => 'form-inline']) !!}
  <div class="form-group">
    {!! Form::input('hidden', 'model', $model) !!}
    {!! Form::input('search', 'query', $query, ['placeholder' => 'Buscar '.translate($model)])  !!}
  </div>
{!! Form::close() !!}
