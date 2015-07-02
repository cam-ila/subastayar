@if($bid->comments->count() > 0)
  @foreach($bid->comments as $comment)
  <div class="comment">
    {!! MediaObject::withContents(mediaObjectOptions($comment)) !!}
    @if($comment->user == Auth::user() && ! $comment->answered())
    {!! destroy_link($comment, route('bids.comments.destroy', ['bid_id' => $resource->id, 'comment_id' => $comment->id])) !!}
    @endif
  </div>
  @endforeach
@else
  <div class="alert alert-warning" role="alert">
    Por ahora no hay comentarios, puedes loguearte para dejar uno.
  </div>
@endif
