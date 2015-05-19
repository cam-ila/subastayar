<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Offer as Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;

class OffersController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {

    $query     = $request->input('query');
    $resources = Offer::search($query)->get(['*']);
    $model = 'offer';
    return view('shared.index', compact('resources', 'model', 'query'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(OfferRequest $request)
  {
    Offer::create($request->all());
    return redirect()->back();
  }

  public function create(Request $request)
  {
    $resource = new Offer(['bid_id' => $request->get('bid_id')]);
    return view('shared.create', compact('resource'));
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
