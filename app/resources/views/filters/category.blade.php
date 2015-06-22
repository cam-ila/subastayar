<div class="js-filter-form navbar-form navbar-left" data-url="{{ route('bidsByCategory', null) }}/">
{!! Form::select('category_id',  [ 0 => 'Todas' ] + App\Models\Category::query()->lists('name', 'id')->toArray(),
      (isset($category_id) ? $category_id : null),
      [ 'class' => 'form-control',
        'id'    => 'category' ])
!!}
</div>
