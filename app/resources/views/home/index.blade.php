@extends('app')


@section('search_bar')
@include('shared.partials.search', ['url' => route('home'), 'query' => $query, 'model' => $model, 'navbar' => true])
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="sort-actions">
      <label for=""> Ordernar por:</label>
      {!! Button::success('nombre')->withAttributes(['class' => 'js-sort-button', 'data-sortby' => 'title', 'data-order' => 'desc']) !!}
      {!! Button::success('fecha')->withAttributes(['class' => 'js-sort-button', 'data-sortby' => 'date', 'data-order' => 'desc']) !!}
      {!! Button::success('categoria')->withAttributes(['class' => 'js-sort-button', 'data-sortby' => 'category', 'data-order' => 'desc']) !!}
    </div>
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
