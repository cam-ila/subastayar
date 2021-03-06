<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>

{!! Form::input('hidden','user_id', Auth::user()->id) !!}
{!! Form::input('hidden','bid_id', $resource->bid_id) !!}

<div class="form-group">
  {{ "ofertando por {$resource->bid}" }}
</div>
<div class="form-group">
  {!! Form::textarea('body', $resource->body, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Oferta por la Subasta', 'required' => true]) !!}
</div>

<div class="form-group">
  <label for="prize">Valor a ofertar</label>
  {!! Form::input('number', 'prize', $resource->prize, ['class' => 'form-control', 'id' => 'prize', 'required' => true, 'min' => 1]) !!}
</div>

<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
</div>
