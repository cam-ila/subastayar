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
    <div class="form-gro">
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
