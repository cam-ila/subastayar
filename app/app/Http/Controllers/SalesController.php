<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sale as Sale;
use App\Models\Offer as Offer;
use Illuminate\Http\Request;

class SalesController extends Controller {

  public function index()
  {
    //
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    $sale = new Sale($request->all());
    if ($sale->save()) {
      $sale->bid->deactivate();
      notify($sale->buyer()->id, sold_to_message($sale));
      return redirect()->back()->withMessage('Se ha registrado la oferta ganadora');
    } else {
      return redirect()->back()->withError('No se pudo seleccionar la oferta como ganadora');
    }
  }


  public function pay(Request $request, Sale $sale)
  {
    return view('sales.pay', compact('sale'));
  }

  public function registerPay(Request $request, Sale $sale)
  {
    return redirect(route('home'))->withMessage('Se ha registrado su pago.');
  }
}
