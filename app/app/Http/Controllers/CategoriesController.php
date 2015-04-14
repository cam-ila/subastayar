<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;


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
    $category = new Category();
    return view('categories.create', compact('category'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    Category::create(['name' => $request->input('name')]);
    return redirect('category');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $category = Category::find($id);
    return view('categories.show', compact('category'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $category = Category::find($id);
    return view('categories.edit', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
    $category = Category::find($id);
    $category->update(['name' => $request->input('name')]);
    return redirect(route('category.show', $category));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    // buscamos la categoria y la hacemos chucha
    Category::destroy($id);
    return redirect('category');
  }

}
