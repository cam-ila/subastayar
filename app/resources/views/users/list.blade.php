@extends('app')

@section('content')

  @section('panel_body')

  <div class="col-md-4">
    @include('statistics.form')
  </div>

  <div class="col-md-8">
  @if($resources->count() >0)
    @foreach($resources as $user)
      {!! link_to(route('users.show', $user), $user) !!} <br>
    @endforeach
  @endif
  </div>
  @endsection

  @include('shared.partials.panel', [
    'title'  => trans('models.users.between'),
    'search' => false]
    )

@endsection