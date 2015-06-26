<div class="container-fluid">

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
    @if($resource->sold() )
    <div class="alert alert-success" role="alert">
      Este articulo ha sido vendido al usuario {!! link_to(route('user.show', $resource->sale->buyer()), $resource->sale->buyer()) !!}
    </div>
    @else
      <h4>Ofertas:</h4>
      <div class="col-md-12">
        @include('bids.offers', ['bid' => $resource])
      </div>
    @endif
  </div>
  @endif

</div>
