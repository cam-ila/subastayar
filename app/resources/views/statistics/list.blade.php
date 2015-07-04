@extends('app')

@section('content')

{!! Form::open([
  'url' => '#',
  'method' => 'GET'
  ]) !!}
{!! Form::input('date', 'start_date', null, ['class' => 'form-control', 'required' => true, 'id' => 'start_date'])  !!}
{!! Form::input('date', 'end_date', null, ['class' => 'form-control', 'required' => true, 'id' => 'end_date'])  !!}
{!! Form::submit('Ver', ['class' => 'btn btn-success']) !!}
{!! Form::close()  !!}

@endsection