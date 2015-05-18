<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
  {!! Form::text('title', $resource->title, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Nombre de la Subasta']) !!}
</div>
<div class="form-group">
  {!! Form::textarea('description', $resource->description,  ['class' => 'form-control', 'placeholder' => 'Descripcion de la Subasta']) !!}
</div>
<div class="form-group">
  <label for="category">Categoria:</label>
  {!! Form::select('category_id', App\Models\Category::all(), null, ['class' => 'form-control', 'id' => 'category']) !!}
</div>
<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
