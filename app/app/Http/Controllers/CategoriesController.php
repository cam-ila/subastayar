<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category as Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    // TODO: abstract this to a single location, getting the class dynamically 
    $query        = $request->input('query');
    $model        = ($request->input('model')) ? $request->input('model') : 'category';
    $resources    = call_user_func('App\Models\\'.ucfirst($model).'::search', $query)->get(['*']);
    return view('shared.index')->with(compact('resources', 'model', 'query'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $resource = new Category;
    return view('shared.create', compact('resource'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(CategoryRequest $request)
  {
    Category::create(['name' => $request->input('name')]);
    return redirect('categories');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Category $resource)
  {
    return view('shared.show', compact('resource'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Category $resource)
  {
    return view('shared.edit', compact('resource'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Category $category, CategoryRequest $request)
  {
    $category->update(['name' => $request->input('name')]);
    return redirect(route('categories.show', $category));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Category $category)
  {
    $category->delete();
    return redirect('categories')->with('message', 'Hubo un error al intentar borrar la categoria.');
  }

}
