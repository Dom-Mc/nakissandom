<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAddressRequest extends Request {

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
			 'ContactName' => 'required|between:7,50', // 50, min of 5 characters in length
			 'Email' => 'required|between:5,50|email', // 50
			 'Phone' => 'required|between:10,17', //17  unique:table,column,except,idColumn
			 'Address' => 'required|between:5,75', //75
			 'City' => 'required|between:3,50', //50
			 'Zip' => 'required|digits:5', //5
			 'State' => 'required|between:2,20' //20;
			 //sometimes your rules will be different for create and update requests
		];
	}


}
