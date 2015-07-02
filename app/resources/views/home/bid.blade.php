@extends('app')

@section('content')
<div class="container">

  <div class="row">
    <h4>{{ $resource }}</h4>
    <div class="col-md-12">
      @include('bids.home_partial', ['bid' => $resource])
    </div>
  </div>

  <div class="row">
    <h4>Comentarios:</h4>
    <div class="col-md-12">
      @include('bids.comments', ['bid' => $resource])
    </div>
  </div>

  <div class="row">
    @if(Auth::user())
      @if(Auth::user() != $resource->user && ! $resource->expired())
      <h4>Crear Comentario:</h4>
      <div class="col-md-12">
        {!! Form::open(['url' => route('bids.comments.store', $resource)]) !!}

          @include('shared.partials.form_errors', compact('errors'))

          {!! Form::input('hidden', 'user_id', Auth::user()->id) !!}
          {!! Form::input('hidden', 'bid_id', $resource->id) !!}

          <div class="form-group">
          {!! Form::textarea('body', old('body'), ['placeholder' => 'aqui va tu comentario', 'class' => 'form-control', 'required' => true]) !!}
          </div>
          {!! Form::submit('Comentar', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
      </div>
      @endif
    @else
    <div class="alert alert-warning" role="alert">
      Debe estar logueado para comentar.
      <a href="{{ url('/auth/login') }}">Ingresar</a>
    </div>
    @endif
  </div>

</div>
@endsection
