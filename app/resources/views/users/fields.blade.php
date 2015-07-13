<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
  <label class="col-md-4 control-label">{{ trans('forms.name') }}</label>
  <div class="col-md-6">
    {!! Form::text('name', $resource->name, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'nombre', 'required' => true]) !!}
  </div>
</div>

<div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
  <label class="col-md-4 control-label">{{ trans('forms.last_name') }}</label>
  <div class="col-md-6">
    {!! Form::text('last_name', $resource->last_name, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'apellido', 'required' => true]) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-6 col-md-offset-4">
    <button type="submit" class="btn btn-primary">
      {{ trans('forms.register_submit') }}
    </button>
  </div>
</div>