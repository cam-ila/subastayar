<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid as Bid;
use App\Models\User as User;
use App\Models\Category as Category;

class HomeController extends Controller {

  public function index(Request $request)
  {
    $query     = $request->input('query');
    $resources = Bid::search($query)->active()->get(['*']);
    $model     = 'bid';
    return view('home.index', compact('resources', 'model', 'query'));
  }

  public function show(Bid $resource)
  {
    return view('home.bid', compact('resource'));
  }

  public function bidsByCategory(Category $category, Request $request)
  {
    $query     = $request->input('query');
    $model     = 'bid';
    $resources = Bid::active()->whereCategoryId($category->id)->get();
    return view('home.index', compact('resources', 'query', 'model', 'category'));
  }

  public function getRestore()
  {
    return view('users.restore');
  }

  public function postRestore(Request $request)
  {
    $user = User::onlyTrashed()->whereEmail($request->get('email'))->first();
    if ($user) {
      $user->restore();
      return redirect(url('auth/login'))->withMessage(trans('forms.login_email_sent'));
    } else {
      return redirect()->back()->withError(trans('forms.user_not_found'));
    }
  }

  public function contact()
  {
    return view('home.contact');
  }

  public function thanks()
  {
    return redirect(route('home'))->withMessage('Se ha registrado su mail. Gracias por comunicarse.');
  }

  public function help()
  {
    return view('home.help');
  }
}
