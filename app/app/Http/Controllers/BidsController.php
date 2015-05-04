<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Bid as Bid;
use App\Http\BidRequest;

class BidsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $resources = Bid::all();
    $model = 'bid';
    return view('shared.index', compact('resources', 'model'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $bid = new Bid;
    return view('bids.create', compact('bid'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(BidRequest $request)
  {
    Bid::create(['name' => $request->input('name')]);
    return redirect('bids');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show(Bid $bid)
  {
    return view('bids.show', compact('bid'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Bid $bid)
  {
    return view('bids.edit', compact('bid'));
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
    // buscamos la categoria y la hacemos chucha
    $bid->delete();
    return redirect('bids');
  }

}
