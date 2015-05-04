<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
  {!! Form::text('title', $bid->title,  ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Nombre de la Categoria']) !!}
</div>
<div class="form-group">
  {!! Form::textarea('description', $bid->description,  ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Nombre de la Categoria']) !!}
</div>
<div class="form-group">
{{ $bid->user()->get() ? $bid->user()->get()->name : 'sarasa'}}
<!--  ($bid&#45;>user()&#45;>id ? $bid&#45;>user()&#45;>id : null) , -->
  {!! Form::select('user_id', App\Models\User::lists('name', 'id'),  ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Nombre de la Categoria']) !!}
</div>
<div class="actions pull-right">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success', ]) !!}
</div>
