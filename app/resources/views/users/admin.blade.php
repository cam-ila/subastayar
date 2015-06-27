@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-8">
    {!! Form::open(['url' => route('users.setAdmin')]) !!}
    <div class="form-group">
      <label for="new_admin_id">Seleccione un usuario para ser asignado como administrador:</label> <br>
      {!! Form::select('new_admin_id', $users, null, ['class' => 'form-control']) !!}
    </div>
    <div class="actions">
      {!! Form::submit('Asignar Administrador', ['class' => 'btn btn-danger btn-form-submit']) !!}
    </div>
    {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
