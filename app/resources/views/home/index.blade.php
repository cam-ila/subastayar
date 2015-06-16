@extends('app')


@section('search_bar')
@include('shared.partials.search', ['url' => route('home'), 'query' => $query, 'model' => $model, 'navbar' => true])
@endsection

@section('content')

<div class="container">
  <div class="row">
    @if(!$resources->count() == 0)
    @foreach($resources as $resource)
    <div class="col-md-4 index-bid-container">
      @include('bids.home_partial', ['bid' => $resource])
    </div>
    @endforeach
    @else
    <div class="alert alert-warning">
      <p>{{ trans('messages.no_records') }}</p>
    </div>
    @endif
  </div>
</div>

@endsection
