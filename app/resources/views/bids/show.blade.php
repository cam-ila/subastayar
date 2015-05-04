
@extends('app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">{{ trans('models.bid') }}</div>
        <div class="panel-body">
          <p>{{ $bid->title }}</p>
          <p>{{ $bid->description }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
