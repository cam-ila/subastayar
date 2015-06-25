@extends('app')

@section('content')
<div class="container">
  <div class="row">
    {!! Form::open(['url' => route('users.setAdmin')]) !!}
    <div class="form-group">
      <label for="new_admin_id">Seleccione un usuario para ser asignado como administrador:</label> <br>
      {!! Form::select('new_admin_id', $users) !!}
    </div>
    <div class="actions">
      {!! Form::submit('Asignar Administrador', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
