@extends('app')

@section('content')

@foreach($resources as $resource)
  @include('bids.home_partial', ['bid' => $resource])
@endforeach

@endsection
