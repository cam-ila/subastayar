<div class="description">
  <h4 class="heading">
    {!! link_to(route('home.show', $resource->bid), $resource)!!}
  </h4>
  <p>
  <strong>Dijo:</strong>
  {{ $resource->body }}
  </p>
</div>
