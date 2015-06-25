{!! Form::input('hidden', 'user_id', Auth::user()->id) !!}

<div class="form-group {{ $errors->has('bid_id') ? 'has-error' : ''}}">
  {!! Form::text('bid_id', $resource->bid_id, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'bid_id', 'required' => true]) !!}
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
  {!! Form::textarea('body', $resource->body,  ['class' => 'form-control', 'placeholder' => 'Descripcion del comentario', 'required' => true]) !!}
</div>

<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
