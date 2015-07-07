@if($bid->comments->count() > 0)
  @foreach($bid->comments as $comment)
  <div class="comment">
    {!! MediaObject::withContents(mediaObjectOptions($comment)) !!}
    @if($comment->user == Auth::user() && ! $comment->answered())
    {!! destroy_link($comment, route('bids.comments.destroy', ['bid_id' => $resource->id, 'comment_id' => $comment->id])) !!}
    @endif

    @if($bid->user == Auth::user() && ! $comment->answered())
    {!! Form::open([
      'url' => route('bids.comments.update', ['bids' => $bid->id, 'comments' => $comment->id]),
      'method' => 'PUT'
      ]) !!}
    {!! Form::textarea('response', null, ['placeholder' => 'Responder al comentario...', 'class' => 'form-control', 'required' => true])  !!}
    {!! Form::submit('Respnder', ['class' => 'btn btn-success']) !!}
    {!! Form::close()  !!}
    @endif

  </div>
  @endforeach
@else
  <div class="alert alert-warning" role="alert">
    Por ahora no hay comentarios, puedes loguearte para dejar uno.
  </div>
@endif
