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
    if (Offer::where('user_id', '=', $resource->user_id)->where('bid_id', '=', $resource->bid_id)->count() == 0 && $resource->save()){
      return redirect(route('bids.show', $resource->bid))->withMessage("Oferta Creada.");
    } else {
      return redirect(route('home.show', $resource->bid))->withError('Ya ha ofertado por esta subasta')->with(compact('resource'));
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
    return redirect()->back();
  }

  public function edit(Offer $resource)
  {
    return view('shared.edit', compact('resource'));
  }

  public function show(Offer $resource)
  {
    return view('shared.show', compact('resource'));
  }

  public function update(Offer $offer, OfferRequest $request)
  {
    $offer->update($request->all());
    return redirect(route('offers.show', $offer));
  }
}
