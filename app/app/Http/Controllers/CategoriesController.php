<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\CategoryRequest;
use App\Models\Category as Category;

class CategoriesController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $resources = Category::all();
    $model = 'category';
    return view('shared.index', compact('resources', 'model'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $category = new Category;
    return view('categories.create', compact('category'));
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
  public function show(Category $category)
  {
    return view('categories.show', compact('category'));
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
    // buscamos la categoria y la hacemos chucha
    $category->delete();
    return redirect('categories');
  }

}
