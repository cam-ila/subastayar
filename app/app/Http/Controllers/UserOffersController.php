<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User as User;
use App\Models\Offer as Offer;

use Illuminate\Http\Request;

class UserOffersController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request, User $user)
  {
    $query     = $request->input('query');
    $model     = 'offer';
    $resources = $user->offers;
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
