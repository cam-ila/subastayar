<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category as Category;

class CategoriesController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $categories = Category::all();
    return view('categories.index', compact('categories'));
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
  public function store(CreateCategoryRequest $request)
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
  public function edit(Category $category)
  {
    return view('categories.edit', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Category $category, CreateCategoryRequest $request)
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
