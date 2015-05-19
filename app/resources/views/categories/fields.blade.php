<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::input('text', 'name', $resource->name,  ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Nombre de la Categoria']) !!}
</div>
<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
