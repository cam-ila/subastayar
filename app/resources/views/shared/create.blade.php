@extends('app')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
   {{ trans('crud.titles.create', ['model' => translate($resource->model())]) }}
  </div>
  <div class="panel-body">
    @include('shared.partials.form', ['method' => 'PUT'])
  </div>
</div>
@endsection
