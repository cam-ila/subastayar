@extends('app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Registrarse</div>
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

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-4 control-label">{{ trans('forms.name') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">{{ trans('forms.last_name') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">{{ trans('forms.email') }}</label>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">{{ trans('forms.password') }}</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">{{ trans('forms.confirm') }}</label>
              <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  {{ trans('forms.register_submit') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
