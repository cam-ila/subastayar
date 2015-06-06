<div class="bid">
  <hr>
  <div class="img-wrapper">
    <a href="{{ route('home.show', $bid)}}">
    {!! HTML::image('/uploads/img/' . $resource->image, $resource->title, ['class' => 'img-rounded img-responsive img-thumbnail']) !!}
    </a>
  </div>
  <hr>
  <div class="description">
    {{ $bid->description }}
  </div>
  <hr>
  <div class="actions">
        {!! offer_link($resource) !!}
        {!! edit_link($resource) !!}
        {!! destroy_link($resource) !!}
  </div>
  <hr>
</div>
