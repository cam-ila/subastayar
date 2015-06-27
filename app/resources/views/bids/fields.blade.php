{!! Form::input('hidden', 'user_id', Auth::user()->id) !!}

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
  {!! Form::text('title', $resource->title, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Titulo de la Subasta', 'required' => true]) !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
  {!! Form::textarea('description', $resource->description,  ['class' => 'form-control', 'placeholder' => 'Descripcion de la Subasta', 'required' => true]) !!}
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
  @if($resource->image)
    {!! HTML::image('/uploads/img/' . $resource->image, $resource->title, ['class' => 'img-rounded img-responsive img-thumbnail']) !!}
  @endif
  {!! Form::file('image') !!}
</div>

<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
  <label for="category" data-toggle="tooltip" title="Cantidad de dias a mantener la subasta abierta.">Duracion de la subasta:</label>
  {!! Form::selectRange('days_to_expiration', 15, 30, ($resource->created_at == null ? 15 : $resource->diffToExpiresAt()), ['class' => 'form-control', 'id' => 'category', 'required' => true]) !!}
</div>

<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
  <label for="category">Categoria:</label>
  {!! Form::select('category_id', App\Models\Category::query()->lists('name', 'id'), $resource->category_id, ['class' => 'form-control', 'id' => 'category', 'required' => true]) !!}
</div>

<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
