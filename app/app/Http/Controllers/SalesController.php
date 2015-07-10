<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Sale as Sale;
use App\Models\Offer as Offer;
use Illuminate\Http\Request;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class SalesController extends Controller {

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
    $sale->payed = true;
    $sale->save();
    return redirect(route('home'))->withMessage('Se ha registrado su pago.');
  }

  public function betweenDates(Request $request)
  {
    if ( $request->get('start_date') && $request->get('end_date') ) {
      return Sale::whereBetween('created_at', [$request->get('start_date') , $request->get('end_date') ])->get()->toArray() ;
    } else {
    return view('statistics.list'); }
  }

  public function statistics(Request $request)
  {
    if (Auth::user()->admin) {
      return view('sales.statistics', compact('resources', 'start_date', 'end_date'));
    } else {
      return redirect(route('home'))->withError('No tiene permisos suficientes para realizar esta accion.');
    }
  }

  public function results(Request $request)
  {
    $resources  = new Collection;
    $start_date = $request->get('start_date');
    $end_date   = $request->get('end_date');

    if ($start_date && $end_date) {
      $from      = Carbon::createFromFormat('Y-m-d', $start_date);
      $upto      = Carbon::createFromFormat('Y-m-d', $end_date);
      $resources = Sale::whereBetween('created_at', [$from, $upto])->get() ;
    }

    return view('sales.results', compact('resources', 'start_date', 'end_date'));
  }
}
