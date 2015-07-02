<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CommentRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'body' => 'required|min:10'
    ];
  }

}

