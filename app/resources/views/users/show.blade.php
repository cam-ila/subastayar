@extends('app')

@section('content')
<div class="container-fluid">
  <h4>Datos de usuario</h4>
  <dl>
    <dt>Nombre:</dt>
    <dd>{{ $user->name }}</dd>
    <dt>Apellido:</dt>
    <dd>{{ $user->last_name }}</dd>
    <dt>Email:</dt>
    <dd>{!! link_to('mailto:' . $user->email, $user->email) !!}</dd>
  </dl>
</div>
@endsection
