<div class="bid"
     data-date="{{ $bid->date }}"
     data-title="{{ $bid->title }}"
     data-category="{{ $bid->category }}"
  >
  <hr>
  <div class="img-wrapper">
    <a href="{{ route('home.show', $bid)}}">
      {!! HTML::image('/uploads/img/' . $bid->image, $bid->title, ['class' => 'img-rounded img-responsive img-thumbnail']) !!}
    </a>
  </div>
  <hr>
  <div class="description">
    {{ $bid->description }}
  </div>
  <hr>
  <div class="actions">
        {!! offer_link($bid) !!}
        {!! edit_link($bid) !!}
        {!! destroy_link($bid) !!}
  </div>
  <hr>
</div>
