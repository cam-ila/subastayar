  {!! Form::open([
    'url' => route('users.statistics'),
    'method' => 'GET'
    ]) !!}
  <div class="form-group">
    {!! Form::input('date', 'start_date', $start_date, ['class' => 'form-control', 'required' => true, 'id' => 'start_date'])  !!}
  </div>
  <div class="form-group">
    {!! Form::input('date', 'end_date', $end_date, ['class' => 'form-control', 'required' => true, 'id' => 'end_date'])  !!}
  </div>
  <div class="form-group">
  {!! Form::submit('Ver', ['class' => 'btn btn-success']) !!}
  </div>
  {!! Form::close()  !!}
