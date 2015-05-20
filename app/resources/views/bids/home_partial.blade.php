<div class="bid">
  <div class="img-wrapper">
    <a href="{{ route('bids.show', $bid)}}">
    {!! HTML::image('/uploads/img/' . $resource->image, $resource->title, ['class' => 'img-rounded img-responsive img-thumbnail']) !!}
    </a>
  </div>
  <div class="description">
    {{ $bid->description }}
  </div>
</div>
