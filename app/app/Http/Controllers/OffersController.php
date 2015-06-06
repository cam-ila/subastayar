<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Offer as Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;

class OffersController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index(Request $request)
  {
    $query     = $request->input('query');
    $resources = Offer::search($query)->get(['*']);
    $model     = 'offer';
    return view('shared.index', compact('resources', 'model', 'query'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(OfferRequest $request)
  {
    $resource = new Offer($request->all());
    if ($resource->save()){
      return redirect(route('bids.show', $resource->bid));
    } else {
      return view('shared.create', compact('resource'));
    }
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

  public function show(Offer $resource)
  {
    return view('shared.show', compact('resource'));
  }
}
