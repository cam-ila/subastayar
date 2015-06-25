<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category as Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller {

  public function index(Request $request)
  {
    $query     = $request->input('query');
    $model     = 'category';
    $resources = Category::search($query)->get();
    return view('shared.index')->with(compact('resources', 'model', 'query'));
  }

  public function create()
  {
    $resource = new Category;
    return view('shared.create', compact('resource'));
  }

  public function store(CategoryRequest $request)
  {
    Category::create(['name' => $request->input('name')]);
    return redirect('categories');
  }

  public function show(Category $resource)
  {
    return view('shared.show', compact('resource'));
  }

  public function edit(Category $resource)
  {
    return view('shared.edit', compact('resource'));
  }

  public function update(Category $category, CategoryRequest $request)
  {
    $category->update(['name' => $request->all()]);
    return redirect(route('categories.show', $category));
  }

  public function destroy(Category $category)
  {
    $category->delete();
    return redirect('categories');
  }

}
