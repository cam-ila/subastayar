<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User as User;
use App\Models\Bid as Bid;

use Illuminate\Http\Request;

class UserBidsController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(User $user, Request $request)
  {
    $query     = $request->input('query');
    $model     = 'bid';
    $resources = Bid::where(['user_id' => $user->id])->get();
    return view('shared.index', compact('resources', 'query', 'model'));
  }

  public function create()
  {
    //
  }

  public function store()
  {
    //
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    //
  }

  public function update($id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }

}
