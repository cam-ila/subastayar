<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PassRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'old_pass' => 'required',
      'password' => 'required|confirmed|min:6',
    ];
  }

}

