<table class="table">
  <thead>
    <tr>
        @foreach ($resources->first()->getVisible() as $attribute)
        <th>{{ trans("models.attributes.{$attribute}") }}</th>
        @endforeach
        <th>{{ trans('crud.titles.actions') }}</th>
    </tr>
  </thead>
  @foreach ($resources as $resource)
  <tbody>
    <tr>
        @foreach ($resource->getVisible() as $attribute)
          @eval($attr = $resource->getAttribute($attribute))
          <td> {{ too_long($attr) ? substr($attr, 0, 25) : $attr}} </td>
        @endforeach
        <td>
        {!! show_link($resource) !!}
        {!! edit_link($resource) !!}
        {!! destroy_link($resource) !!}
        </td>
    </tr>
  </tbody>
  @endforeach
</table>
