@extends('app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading"> Crear Categoria </div>
  <div class="panel-body">
    {!! Form::open(['url' => route('categories.index')]) !!}
      @include('categories.fields')
    {!! Form::close() !!}
  </div>
</div>
@endsection
