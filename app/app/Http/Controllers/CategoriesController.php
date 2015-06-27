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
    if (Category::create($request->all())) {
      return redirect('categories')->withMessage('Se ha creado la categoria ' . $request->get('name'));
    } else {
      return redirect('categories')->withError('No se pudo crear la categoria.');
    }
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
    if ($category->update($request->all())) {
      return redirect(route('categories.show', $category))->withMessage('Se ha actualizado la categoria ' . $category->name);
    } else {
      return redirect(route('categories.show', $category))->withError('No se pudo actualizar la categoria.');
    }
  }

  public function destroy(Category $category)
  {
    $category->delete();
    return redirect('categories');
  }

}
