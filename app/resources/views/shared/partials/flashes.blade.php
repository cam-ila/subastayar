@if (Session::has('notification'))

{{ Session::get('notification') }}
    <div class="alert alert-success">
      {{ trans('messages.welcome') }}
    </div>
@endif
