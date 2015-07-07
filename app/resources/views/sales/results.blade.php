@extends('app')

@section('content')

  @section('panel_body')

  <div class="col-md-4">
    @include('statistics.form', ['url' => route('sales.results')])
  </div>

  <div class="col-md-8">
  @if($resources->count() > 0)
    @foreach($resources as $sale)
      {!! link_to(route('bids.show', $sale->bid_id), $sale) !!} <br>
    @endforeach
  @else
  <div class="alert alert-warning">
    {{ trans('messages.no_records') }}
  </div>
  @endif
  </div>
  @endsection

  @include('shared.partials.panel', [
    'title'  => trans('models.sales.between'),
    'search' => false]
    )

@endsection


