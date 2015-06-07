<div class="js-filter-form navbar-form navbar-left" data-url="{{ route('bidsByCategory', null) }}/">
{!! Form::select('category_id', App\Models\Category::query()->lists('name', 'id'),
      (isset($category_id) ? $category_id : null),
      [ 'class' => 'form-control',
        'id'    => 'category' ])
!!}
</div>
