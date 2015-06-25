<div class="container">
  <div class="row">
    <div class="h4">{{ $resource }}</div>
  </div>
  <div class="row">
    Esta categoria tiene
    {!! link_to(route('bidsByCategory', $resource), $resource->bids->count() . ' ' .  t('models.bid', $resource->bids->count()) ) !!}.
  </div>
</div>
