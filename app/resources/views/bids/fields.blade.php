{!! Form::input('hidden', 'user_id', Auth::user()->id) !!}

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
  {!! Form::text('title', $resource->title, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Titulo de la Subasta', 'required' => true]) !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
  {!! Form::textarea('description', $resource->description,  ['class' => 'form-control', 'placeholder' => 'Descripcion de la Subasta', 'required' => true]) !!}
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
  @if($resource->image)
  <img src="{{ $resource->imagePath() }}" alt="{{ $resource->title }}" class="img-thumbnail">
  @endif
  {!! Form::file('image', ['class' => 'sarasa']) !!}
</div>

<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
  <label for="category">Categoria:</label>
  {!! Form::select('category_id', App\Models\Category::query()->lists('name', 'id'), null, ['class' => 'form-control', 'id' => 'category', 'required' => true]) !!}
</div>

<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
