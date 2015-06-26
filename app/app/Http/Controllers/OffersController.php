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

  public function index(Request $request)
  {
    $query     = $request->input('query');
    $resources = Offer::search($query)->get(['*']);
    $model     = 'offer';
    return view('shared.index', compact('resources', 'model', 'query'));
  }

  public function store(OfferRequest $request)
  {
    $resource = new Offer($request->all());
    if (Offer::where('user_id', '=', $resource->user_id)->where('bid_id', '=', $resource->bid_id)->count() == 0 && $resource->save()){
      notify($resource->bid->user_id, offered_by_message($resource));
      return redirect(route('home.show', $resource->bid))->withMessage("Oferta Creada.");
    } else {
      return redirect(route('home.show', $resource->bid))->withError('Ya ha ofertado por esta subasta')->with(compact('resource'));
    }
  }

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
