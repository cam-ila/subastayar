@if($bid->comments->count() > 0)
  @foreach($bid->comments as $comment)
  <div class="comment">
    {!! MediaObject::withContents(mediaObjectOptions($comment)) !!}
  </div>
  @endforeach
@else
  <div class="alert alert-warning" role="alert">
    Por ahora no hay comentarios, puedes loguearte para dejar uno.
  </div>
@endif