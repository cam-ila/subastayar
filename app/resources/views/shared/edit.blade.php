@extends('app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading"> {{ trans('crud.titles.edit', ['model' => pluralize($resource->model())]) }} </div>
  <div class="panel-body">
    @include('shared.partials.form', ['method' => 'PUT', 'resource' => $resource ])
  </div>
</div>
@endsection
