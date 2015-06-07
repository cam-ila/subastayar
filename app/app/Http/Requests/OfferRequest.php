<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class OfferRequest extends Request {

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'bid_id'  => 'required',
      'user_id' => 'required|unique:offers,user_id,bid_id',
      'body'    => 'required',
    ];
  }

}
