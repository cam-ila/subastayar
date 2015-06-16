@if($bid->offers->count() > 0)
  @foreach($bid->offers as $offer)
  <div class="offer">
    <h4> {!! $offer !!} </h4>
    <p> <strong>Dijo:</strong> {!! $offer->body !!} </p>
    {!! Form::open(['url' => route('sales.store')]) !!}
    {!! Form::hidden('offer', $offer->id) !!}
    {!!  Button::submit()->success()->withIcon(Icon::check())->withAttributes(['class' => 'js-create-sale']) !!}
    {!! Form::close() !!}
  </div>
  @endforeach
@else
  <div class="alert alert-warning" role="alert">
    Por ahora no hay ofertas, puedes loguearte para dejar uno.
  </div>
@endif
