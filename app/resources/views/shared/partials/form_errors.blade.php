<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  @if(!$errors->isEmpty())
    <div class="alert alert-danger">
      <ul>
      @foreach($errors->keys() as $error)
        <li> {!! $errors->first($error, '<span class="help-block">:message</span>') !!} </li>
      @endforeach
      </ul>
    </div>
  @endif
</div>
