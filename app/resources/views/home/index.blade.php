@extends('app')


@section('search_bar')
  @include('shared.partials.search', ['url' => route('home'), 'query' => $query, 'model' => $model, 'navbar' => true])
@endsection

@section('content')

<div class="container">
@foreach($resources as $resource)
  <div class="row">
    @include('bids.home_partial', ['bid' => $resource])
  </div>
@endforeach
</div>

@endsection
