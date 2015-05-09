@extends('app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          {{ pluralize($model) }}
          @include('shared.partials.search', compact('model', 'query'))
        </div>
        <div class="panel-body">
          @foreach ($resources as $resource)
          <div class="row item">
            <div class="col-md-4">
              {!! link_to(route(str_plural($model) . '.show', $resource), $resource) !!}
            </div>
            <div class="col-md-8 text-right">
              {!! link_to(route(str_plural($model) . '.edit', $resource), 'Editar', ['class' => 'btn btn-default']) !!}
              {!! Form::open(['url' => route(str_plural($model) .'.destroy', $resource), 'class' => 'destroy-link']) !!}
              {!! Form::input('hidden', '_method', 'DELETE') !!}
              {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="pull-right">
        {!! link_to(route(str_plural($model) . '.create'),
                    trans('crud.titles.create',
                    ['model' => translate($model)]), ['class' => 'btn btn-success']) !!}
      </div>
    </div>
  </div>
</div>

@endsection
