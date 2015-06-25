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
      return redirect()->back()->withMessage('se ha registrado la oferta ganadora');
    } else {
      return redirect()->back()->withError('no se pudo seleccionar la oferta como ganadora');
    }
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    //
  }

  public function update($id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }

}
