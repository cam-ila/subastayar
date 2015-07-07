@extends('app')

@section('content')

  @section('panel_body')
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

  @section('panel_actions')
    {!! link_to(route('user.edit', Auth::user()), 'Editar mi perfil', ['class' => 'btn btn-primary']) !!}
    {!! Form::open(['url' => route('user.destroy', Auth::user()->id), 'class' => 'destroy-link', 'method' => 'DELETE' ]) !!}
    {!! Button::danger(trans('crud.users.soft_delete'))->withAttributes(['class' => 'btn-form-submit']) !!}
    {!! Form::close() !!}
  @endsection

  @include('shared.partials.panel', [
    'title'  => 'Perfil de usuario',
    'search' => false]
    )
@endsection
