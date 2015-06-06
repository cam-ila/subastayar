<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid as Bid;
use App\Models\User as User;

class HomeController extends Controller {

  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $query     = $request->input('query');
    $resources = Bid::search($query)->get(['*']);
    $model     = 'bid';
    return view('home.index', compact('resources', 'model', 'query'));
  }

  public function show($id)
  {
    $resource = Bid::find($id);
    return view('home.bid', compact('resource'));
  }

  public function bidsByCategory($id, Request $request)
  {
    $query     = $request->input('query');
    $model = 'bid';
    $resources = Bid::whereCategoryId($id)->get();
    return view('home.index', compact('resources', 'query', 'model'));
  }

}
