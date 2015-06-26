{!! Form::open([
  'url'   => (isset($url) ? $url : route(str_plural($model).'.index')),
 'method' => 'GET',
  'class' => (isset($navbar) ? 'navbar-form navbar-left' : 'panel-form'),
   'role' => 'search']) !!}
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
