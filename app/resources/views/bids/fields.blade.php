<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
  {!! Form::text('title', $resource->title,  ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Nombre de la Categoria']) !!}
</div>
<div class="form-group">
  {!! Form::textarea('description', $resource->description,  ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Nombre de la Categoria']) !!}
</div>
<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
