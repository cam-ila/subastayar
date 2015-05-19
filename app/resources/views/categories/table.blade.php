<table class="table sortable-table">
  <thead>
    <tr>
      @foreach ($resources->first()->getVisible() as $attribute)
      <th data-sort="string">
        {{ trans("models.attributes.{$attribute}") }}
        {!! Icon::resize_vertical() !!}
      </th>
      @endforeach
      <th data-sort="int">
        {{ trans('models.attributes.created_at') }}
        {!! Icon::resize_vertical() !!}
      </th>
      <th>{{ trans('crud.titles.actions') }}</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($resources as $resource)
    <tr>
      @foreach ($resource->getVisible() as $attribute)
      @eval($attr = $resource->getAttribute($attribute))
      <td> {{ too_long($attr) ? substr($attr, 0, 25) : $attr}} </td>
      @endforeach
      <td data-sort-value="{{ $resource->created_at }}">{{ nice_date($resource->created_at) }}</td>
      <td>
        {!! show_link($resource) !!}
        {!! edit_link($resource) !!}
        {!! destroy_link($resource) !!}
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
