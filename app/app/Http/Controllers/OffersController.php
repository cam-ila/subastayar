<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Offer as Offer;
use App\Http\Requests\OfferRequest;

class OffersController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $resources = Offer::all();
    $model = 'offer';
    return view('shared.index', compact('resources', 'model'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(OfferRequest $request)
  {
    Offer::create(['name' => $request->input('name')]);
    return redirect()->back();
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Offer $offer)
  {
    $offer->delete();
    return redirect('offers');
  }

}
