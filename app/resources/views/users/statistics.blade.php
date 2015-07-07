
@extends('app')

@section('content')

  @section('panel_body')

  <div class="col-md-4">
    @include('statistics.form', ['url' => route('users.results')])
  </div>

  @endsection

  @include('shared.partials.panel', [
    'title'  => trans('models.users.between'),
    'search' => false]
    )

@endsection
