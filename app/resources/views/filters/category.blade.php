{!! Form::open(['url' => route('home'), 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search', 'data-toggle' => 'tooltip', 'title' => trans('filters.by.category'), 'data-placement' => 'bottom']) !!}
  {!! Form::select('category_id', App\Models\Category::query()->lists('name', 'id'), null, ['class' => 'form-control', 'id' => 'category']) !!}
{!! Form::close() !!}
