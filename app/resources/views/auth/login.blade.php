@extends('app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">{{ trans('forms.login') }}</div>
      <div class="panel-body">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          {!! trans('forms.generic_trouble') !!}
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">
            <label class="col-md-4 control-label">{{ trans('forms.email') }}</label>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">{{ trans('forms.password') }}</label>
            <div class="col-md-6">
              <input type="password" class="form-control" name="password">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> {{ trans('forms.remember') }}
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary">{{ trans('forms.login_submit') }}</button>
            </div>
          </div>
        </form>

        <div class="actions">
          <span class="alert alert-info col-md-12">
            ¿Dio de baja su cuenta? Puede recuperarla{!! link_to(route('users.get_restore'), 'aqui', ['class' => 'btn btn-link']) !!}
          </span>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end row -->
@endsection
