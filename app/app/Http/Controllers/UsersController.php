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
    $user->delete();
    Auth::logout();
    return redirect(route('home'))->withMessage('Se ha dado de baja su cuenta.');
  }

  public function statistics(Request $request)
  {
    if (Auth::user()->admin) {
      $resources  = new Collection;
      $start_date = $request->get('start_date');
      $end_date   = $request->get('end_date');
      if ($start_date && $end_date) {
        $from = Carbon::createFromFormat('Y-m-d', $start_date);
        $upto   = Carbon::createFromFormat('Y-m-d', $end_date);
        $resources  = User::whereBetween('created_at', [$from, $upto])->get() ;
      }
      return view('users.list', compact('resources', 'start_date', 'end_date'));
    } else {
      return redirect(route('home'))->withError('No tiene permisos suficientes para realizar esta accion.');
    }
  }
}
