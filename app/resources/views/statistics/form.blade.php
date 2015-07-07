{!! Form::open(['url' => $url]) !!}
  <div class="form-group">
    {!! Form::input('date', 'start_date', (isset($start_date) ? $start_date : null), ['class' => 'form-control', 'required' => true, 'id' => 'start_date'])  !!}
  </div>
  <div class="form-group">
    {!! Form::input('date', 'end_date', (isset($end_date) ? $end_date : null), ['class' => 'form-control', 'required' => true, 'id' => 'end_date'])  !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Ver', ['class' => 'btn btn-success']) !!}
  </div>
{!! Form::close()  !!}
