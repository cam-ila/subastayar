@extends('app')
@section('content')
<div class="row">
  <div class="col-md-6 centered">
    {!! Form::open(['url' => 'category', 'class' => 'sarasa']) !!}
    <div class="form-group">
      {!! Form::input('text', 'name', '',  ['class' => 'form-control', 'autofocus' => true]) !!}
    </div>
    {!! Form::submit('enviar', ['class' => 'btn btn-default', ]) !!}
    {!! Form::close() !!}
    @endsection
  </div>
</div>
