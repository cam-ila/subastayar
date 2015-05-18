<table class="table">
  <thead>
    <tr>
      @eval($model = $resources->first()->model())
      @foreach ($resources->first()->getVisible() as $attribute)
        <th>{{ trans("models.attributes.{$attribute}") }}</th>
      @endforeach
      <th>{{ trans('models.attributes.created_at') }}</th>
      <th>{{ trans('crud.titles.actions') }}</th>
    </tr>
  </thead>

  <tbody>
  @foreach ($resources as $resource)
    <tr>
      @foreach ($resource->getVisible() as $attribute)
        @eval($attr = $resource->getAttribute($attribute))
        <td> {{ too_long($attr) ? substr($attr, 0, 25).' ... ' : $attr}} </td>
      @endforeach
      <td>{{ nice_date($resource->created_at) }}</td>
      <td>
        {!! show_link($resource) !!}
        {!! edit_link($resource) !!}
        {!! destroy_link($resource) !!}
      </td>
    </tr>
  @endforeach

  </tbody>
</table>
