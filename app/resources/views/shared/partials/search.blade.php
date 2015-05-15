{!! Form::open(['url' => route(str_plural($model).'.index'), 'method' => 'GET', 'class' => 'panel-form']) !!}
{!! Form::input('hidden', 'model', $model) !!}
<div class="input-group">
  {!! Form::input('search', 'query', (isset($query) ? $query : ''), ['placeholder' => 'Buscar '.translate($model).' ...', 'class' => 'form-control'])  !!}
  <span class="input-group-btn">
    <button class="btn btn-default" type="submit">
      <i class="glyphicon glyphicon-search"></i>
    </button>
  </span>
</div><!-- /input-group -->
{!! Form::close() !!}
