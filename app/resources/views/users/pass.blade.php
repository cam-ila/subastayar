@extends('app')

@section('content')

  @section('panel_body')

  {!! Form::open(['url' => route('users.edit.set_pass', $user)]) !!}

  @include('shared.partials.form_errors', compact('errors'))

  <label class="col-md-4 control-label"> Contraseña actual: </label>
  <div class="col-md-6">
    {!! Form::password('old_pass', ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'contraseña actual', 'required' => true]) !!}
  </div>

  <label class="col-md-4 control-label"> Contraseña nueva: </label>
  <div class="col-md-6">
    {!! Form::password('password', ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'contraseña nueva', 'required' => true]) !!}
  </div>

  <label class="col-md-4 control-label"> Confirmar contraseña: </label>
  <div class="col-md-6">
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'confirmar', 'required' => true]) !!}
  </div>

  <div class="row form-group">
  <div class="col-md-6 col-md-offset-4">
    <button type="submit" class="btn btn-primary">
      Guardar cambios
    </button>
  </div>
</div>

   {!! Form::close() !!}

  @endsection


  @include('shared.partials.panel', [
    'title'  => 'Cambiar contraseña',
    'search' => false]
    )
@endsection