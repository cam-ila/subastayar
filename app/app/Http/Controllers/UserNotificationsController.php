<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification as Notification;
use App\Models\User as User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserNotificationsController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request, User $user)
  {
    $resources = $user->notifications;
    $query     = $request->input('query');
    $model     = 'notification';
    return view('notifications.index', compact('resources', 'query', 'model'));
  }

  public function show(User $user, Notification $resource)
  {
    $resource->update(['seen' => true]);
    return view('shared.show', compact('resource'));
  }

  public function destroy(User $user, Notification $resource)
  {
    if ($resource->delete()) {
      return redirect(route('user.notifications.index', ['user' => Auth::user()]))->withMessage('Mensaje correctamente borrado.');
    } else {
      return redirect()->back()->withError('No se pudo borrar el mensaje');
    }
  }
}
