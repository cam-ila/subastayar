<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BidRequest;
use App\Models\Bid as Bid;
use App\Models\Offer as Offer;
use App\Models\User as User;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon as Carbon;

class BidsController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request)
  {
    $query     = $request->input('query');
    $resources = Bid::search($query);
    if (!Auth::user()->admin) { $resources = $resources->whereUserId(Auth::user()->id); }
    $resources = $resources->get(['*']);
    $model     = 'bid';
    return view('shared.index', compact('resources', 'model', 'query'));
  }

  public function create()
  {
    $resource = new Bid;
    return view('shared.create', compact('resource'));
  }

  public function store(BidRequest $request)
  {
    $bid = new Bid($request->except(['image', 'expires_at']));
    $this->setImage($bid, $request->file('image'));
    if ($bid->save()) {
      $bid->expire($request->get('expires_at'));
      return redirect(polymorphic_route($bid, 'show'))->withMessage('Se ha creado la subasta.');
    }
  }

  public function show(Bid $resource)
  {
    if ($resource->user == Auth::user()) {
      return view('shared.show', compact('resource'));
    } else {
      return redirect(route('home'))->withError('Esta subasta no le pertenece.');
    }
  }

  public function edit(Bid $resource)
  {
    if ($resource->user == Auth::user()) {
      return view('shared.edit', compact('resource'));
    } else {
      return redirect()->back()->withError('Esta subasta no le pertenece.');
    }
  }

  public function update(Bid $bid, BidRequest $request)
  {
    if ($bid->user == Auth::user()) {
      $this->setImage($bid, $request->file('image'));
      $bid->update($request->except(['image']));
      if (! empty($request->get('days_to_expiration'))){
        $bid->expires_at = $bid->created_at->addDays($request->get('days_to_expiration'));
      }
      $bid->save();
      return redirect(route('bids.show', $bid));
    } else {
      return redirect()->back()->withError('Esta subasta no le pertenece.');
    }
  }

  public function destroy(Bid $bid, FileSystem $filesystem)
  {
    if ($bid->offers->count() == 0) {
      $filesystem->delete($bid->imagePath() . $bid->image);
      $bid->delete();
      return redirect(route('home'))->withMessage('La subasta fue eliminada exitosamente.');
    } else {
      return redirect()->back()->withError('La subasta ya tiene ofertas.');
    }
  }

  public function createOffer(Bid $bid)
  {
    $resource = new Offer(['bid_id' => $bid->id]);
    return view('shared.create', compact('resource'));
  }

  protected function setImage($bid, $image)
  {
    if ($image) {
      $name = time() . '-' . $image->getClientOriginalName();
      $image->move(public_path() . $bid->imagePath(), $name);
      $bid->image = $name;
    }
  }

}
