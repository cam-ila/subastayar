@extends('app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <br>
    
    <div class="col-md-8 col-md-offset-2">
      {!! Form::open(['url' => route('home.thanks')]) !!}
      <div class="row">
        <div class="form-group">
          <label class="col-md-4 control-label">{{ trans('forms.email') }}</label>
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ (Auth::user() ? Auth::user()->email : '') }}" required>
          </div>
        </div>
      </div>
      <div class="row">
        <br>

        <div class="form-group">
          <label class="col-md-4 control-label">{{ trans('forms.message') }}</label>
          <div class="col-md-6">
            <textarea class="form-control" rows="3" required></textarea>
          </div>
        </div>
      </div>
      <div class="form-group">
        {!! Form::submit('Enviar menasje', ['class' => 'btn btn-primary']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
