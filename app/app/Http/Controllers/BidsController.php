<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BidRequest;
use App\Models\Bid as Bid;
use App\Models\User as User;
use Illuminate\Http\Request;

class BidsController extends Controller {


  public function home(Request $request)
  {
    $query     = $request->input('query');
    $resources = Bid::search($query)->get(['*']);
    $model     = 'bid';
    return view('home.index', compact('resources', 'model', 'query'));
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $query     = $request->input('query');
    $resources = Bid::search($query)->get(['*']);
    $model     = 'bid';
    return view('shared.index', compact('resources', 'model', 'query'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $resource = new Bid;
    return view('shared.create', compact('resource'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(BidRequest $request)
  {
    return $request->file('image');
    $bid = new Bid($request->all());
    $bid->user_id = User::first();
    $this->setImage($request->get('image'));
    $bid->save();
    return redirect('bids');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Bid $resource)
  {
    return view('shared.show', compact('resource'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Bid $resource)
  {
    return view('shared.edit', compact('resource'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Bid $bid, BidRequest $request)
  {
    $bid->update(['name' => $request->input('name')]);
    $this->setImage($request->get('image'));
    return redirect(route('bids.show', $bid));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Bid $bid)
  {
    $bid->delete();
    return redirect('bids');
  }

  protected function setImage($image)
  {
    if ($image) {
      $image->move(public_path() . '/img/' . time() . $image->getClientOriginalName());
      $bid->image = $image->getRealPath();
    }
  }

}
