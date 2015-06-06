@extends('app')


@section('search_bar')
  @include('shared.partials.search', ['url' => route('home'), 'query' => $query, 'model' => $model, 'navbar' => true])
@endsection

@section('content')

@foreach($resources as $resource)
  @include('bids.home_partial', ['bid' => $resource])
@endforeach

@endsection
