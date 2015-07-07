@extends('app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"> Resetear contraseña </div>
        <div class="panel-body">
          {!! Form::open(['url' => route('users.post_restore'), 'class' => 'form-horizontal']) !!}
          <div class="form-group">
            <label class="col-md-4 control-label">{{ trans('forms.email') }}</label>
            <div class="col-md-6">
              {!! Form::input('email', 'email', null, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) !!}
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
              {!! Form::submit('Recupera mi cuenta', ['class' => 'btn btn-primary']) !!}
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
</div>
@endsection
