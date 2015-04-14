@extends('app')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading"> Editar Categoria </div>
  <div class="panel-body">
    {!! Form::open(['url' => route('category.update', $category), 'method' => 'PUT']) !!}
    @include('categories.fields')
    {!! Form::close() !!}
    @endsection
  </div>
</div>
