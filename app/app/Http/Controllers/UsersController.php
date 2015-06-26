<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

  public function show(User $user)
  {
    return view('users.show', compact('user'));
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

}
