{!! Form::input('hidden', 'user_id', 1) !!}

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
  {!! Form::text('title', $resource->title, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Titulo de la Subasta']) !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
  {!! Form::textarea('description', $resource->description,  ['class' => 'form-control', 'placeholder' => 'Descripcion de la Subasta']) !!}
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
  {!! Form::file('image', $resource->image) !!}
</div>

<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
  <label for="category">Categoria:</label>
  {!! Form::select('category_id', App\Models\Category::query()->lists('name', 'id'), null, ['class' => 'form-control', 'id' => 'category']) !!}
</div>

<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
