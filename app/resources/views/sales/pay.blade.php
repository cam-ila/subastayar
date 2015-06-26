@extends('app')

@section('content')

  @section('panel_body')
  <div class="container-fluid">
    <div class="row"><h4>El importe es de: ${{ $sale->offer->prize }}</h4></div>
    <div class="row">
    {!! Form::open(['url' => route('sales.register_pay', $sale->id)]) !!}
    <div class="form-group">
      <label for="credit_card">Ingrese el numero de su tarjeta de credito</label>
      {!! Form::input('text', 'credit_card', null, [
          'pattern' => '[0-9]{13,16}',
          'title' => 'Debe ser un numero entre 13 y 16 caracteres.',
          'data-toggle' => 'tooltip',
          'required' => true,
          'class' => 'form-control'
      ]) !!}
    </div>
    <div class="form-group">
      <label for="credit_card">Ingrese el codigo de seguridad de su tarjeta.</label>
      {!! Form::input('text', 'security_code', null, [
          'pattern' => '[0-9]{4}',
          'title' => 'Se encuentra en el reverso de su tarjeta y cuenta con 4 numeros.',
          'data-toggle' => 'tooltip',
          'required' => true,
          'class' => 'form-control'
      ]) !!}
    </div>
    <div class="form-group">
      <label for="user_name">Nombre:</label>
      {!! Form::text('user_name', Auth::user()->name, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      <label for="last_name">Apellido:</label>
      {!! Form::text('user_last_name', Auth::user()->last_name, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      {!! Form::text('user_email', Auth::user()->email, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Pagar', ['class' => 'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
    </div>
  </div>
  @endsection

  @include('shared.partials.panel', [
    'title'  => 'Usted esta comprando: ' . $sale->bid ,
    'search' => false]
    )
@endsection
