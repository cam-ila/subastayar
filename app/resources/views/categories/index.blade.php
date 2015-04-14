@extends('app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Categorias</div>
        <div class="panel-body">
          @foreach ($categories as $category)
          <div class="item">
            {!! link_to(route('category.show', $category), $category->name) !!}
            {!! Form::open(['url' => route('category.destroy', $category), 'class' => 'destroy-link']) !!}
            {!! Form::input('hidden', '_method', 'DELETE') !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger', ]) !!}
            {!! Form::close() !!}
          </div>
          @endforeach
        </div>
      </div>
      {!! link_to(route('category.create'), 'Crear Categoria', ['class' => 'btn btn-success']) !!}
    </div>
  </div>
</div>

@endsection
