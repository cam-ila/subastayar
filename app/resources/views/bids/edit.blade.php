@extends('app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading"> Editar {{ trans('models.bid') }} </div>
  <div class="panel-body">
    {!! Form::open(['url' => route('bids.update', $bid), 'method' => 'PUT']) !!}
    @include('bids.fields')
    {!! Form::close() !!}
    @endsection
  </div>
</div>
