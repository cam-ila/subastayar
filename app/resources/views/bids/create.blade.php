@extends('app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading"> Crear {{ trans('models.bid') }} </div>
  <div class="panel-body">
    {!! Form::open(['url' => route('bids.index')]) !!}
      @include('bids.fields')
    {!! Form::close() !!}
  </div>
</div>
@endsection
