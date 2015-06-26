@if($bid->offers->count() > 0)
  @foreach($bid->offers as $offer)
  <div class="offer">
    <p>
    @if($bid->expired())
    {!! Form::open(['url' => route('sales.store'), 'class' => 'form-inline']) !!}
    {!! Form::hidden('offer_id', $offer->id) !!}
    {!! Form::hidden('bid_id', $bid->id) !!}
    {!! Button::submit()->success()->withIcon(Icon::check())->withAttributes(['class' => 'btn-form-submit', 'data-toggle' => 'tooltip', 'title' => 'Seleccionar oferta como ganadora.']) !!}
    {!! Form::close() !!}
    @endif
    <strong>Dijo:</strong> {!! $offer->body !!} 
    </p>
  </div>
  @endforeach
@else
<div class="alert alert-warning" role="alert">
    Por ahora no hay ofertas, puedes loguearte para dejar uno.
</div>
@endif
