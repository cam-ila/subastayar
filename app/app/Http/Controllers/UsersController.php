<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use Carbon\Carbon as Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Http\Controllers\Auth\PasswordController as PasswordController;

class UsersController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function show(User $user)
  {
    return view('users.show', compact('user'));
  }

  public function edit(User $resource)
  {
    if(Auth::user() == $resource) {
      return view('shared.edit', compact('resource'));
    } else {
      return redirect(route('home'))->withError('Esta cuenta de usuario no le pertenece.');
    }
  }

  public function admin()
  {
    $users = User::whereAdmin(false)->lists('name', 'id');
    return view('users.admin', compact('users'));
  }

  public function setAdmin(Request $request)
  {
    $user = User::find($request->get('new_admin_id'));
    $user->admin = true;
    if ($user->save()) {
      return redirect()->back()->withMessage('Se ha seteado a ' . $user->name . ' como Administrador.');
    } else {
      return redirect()->back()->withError('No se pudo seleccionar este usuario como Administrador.');
    }
  }

  public function destroy(User $user)
  {
    if ($user->activeBids()->count() > 1) {
      return redirect()->back()->withError(trans('users.active_bids'));
    }
    if ($user->unpayedOffers()->count() > 1) {
      return redirect()->back()->withError(trans('users.unpayed_offers'));
    }
    if ($user->activeOffers()->count() > 1) {
      return redirect()->back()->withError(trans('users.active_offers'));
    }

    $user->delete();
    Auth::logout();
    return redirect(route('home'))->withMessage('Se ha dado de baja su cuenta.');
  }

  public function statistics(Request $request)
  {
    if (Auth::user()->admin) {
      return view('users.statistics', compact('resources'));
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
        $from = Carbon::createFromFormat('Y-m-d', $start_date);
        $upto   = Carbon::createFromFormat('Y-m-d', $end_date);
        $resources  = User::whereBetween('created_at', [$from, $upto])->get() ;
      }
      return view('users.results', compact('resources', 'start_date', 'end_date'));
  }

  public function update(User $user, Request $request)
  {
   if ($user->update($request->all())) {
    $user->save(); 
    return redirect(route('users.show', $user))-> withMessage('Se ha editado exitosamente su perfil');
  } else {
    return redirect(route('users.show', $user))-> withError('No se pudo editar su perfil');
  }
    
   }
}
