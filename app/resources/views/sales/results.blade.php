@extends('app')

@section('content')

  @section('panel_body')

  <div class="col-md-4">
    @include('statistics.form', ['url' => route('sales.results')])
  </div>

  <div class="col-md-8">
  @if($resources->count() > 0)
    @foreach($resources as $sale)
    <div class="jumbotron">
      <h4>{!! link_to(route('bids.show', $sale->bid_id), $sale->bid->title) !!}</h4>
      <dl>
        <dt>{{ trans('validation.attributes.sold_at') }}</dt>
        <dd>{{ $sale->created_at->toFormattedDateString() }}</dd>
        <dt>{{ trans('validation.attributes.owner') }}</dt>
        <dd>{{ $sale->seller() }}</dd>
        <dt>{{ trans('validation.attributes.winner') }}</dt>
        <dd>{{ $sale->buyer() }}</dd>
        <dt>{{ trans('validation.attributes.earning') }}</dt>
        <dd>{{ $sale->offer->prize * .30 }}</dd>
      </dl>
    </div>
    @endforeach
    <div class="total">
      Ganancias Totales:
      {{ $resources->reduce(function($carry, $sale){ return $carry + $sale->offer->prize; }, 0) * .3 }}
    </div>
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


