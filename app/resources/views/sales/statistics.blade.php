@extends('app')

@section('content')

  @section('panel_body')

  <div class="col-md-4">
    @include('statistics.form', ['url' => route('sales.results')])
  </div>
  @endsection

  @include('shared.partials.panel', [
    'title'  => trans('models.sales.between'),
    'search' => false]
    )

@endsection

