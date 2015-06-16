<div class="container">
  <div class="row">
    <h4>{{ $resource }}</h4>
    <div class="col-md-12">
      @include('bids.home_partial', ['bid' => $resource])
    </div>
  </div>
  <div class="row">
    <h4>Comentarios:</h4>
    <div class="col-md-12">
      @include('bids.comments', ['bid' => $resource])
    </div>
  </div>
  @if(Auth::user() == $resource->user)
  <div class="row">
    <h4>Ofertas:</h4>
    <div class="col-md-12">
      @include('bids.offers', ['bid' => $resource])
    </div>
  </div>
  @endif
</div>
