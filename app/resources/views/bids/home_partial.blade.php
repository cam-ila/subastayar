<div class="bid">
  <div class="img-wrapper">
    <a href="{{ route('bids.show', $bid)}}">
      {!! HTML::image($bid->image, $bid->title, ['class' => 'img-rounded'])  !!}
    </a>
  </div>
  <div class="description">
    {{ $bid->description }}
  </div>
</div>
