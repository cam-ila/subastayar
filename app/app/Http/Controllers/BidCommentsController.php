<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CommentRequest;
use App\Models\Bid as Bid;
use App\Models\Comment as Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class BidCommentsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    //
  }

  public function create()
  {
    //
  }

  public function store(CommentRequest $request, Bid $bid)
  {
    if ($bid->expired() || ! $bid->active) {
      return redirect(route('home'))->withError('La subasta ya ha finalizado');
    }
    $comment = new Comment($request->all());
    if ($comment->save()) {
      return redirect()->back()->withMessage('Comentario creado satisfactoriamente');
    } else {
      return redirect()->back()->withError('No se pudo guardar el comentario.');
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
