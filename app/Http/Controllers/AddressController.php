<?php namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests;
use App\Http\Requests\CreateAddressRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;


class AddressController extends Controller {

	public function home()
	{
		return view('pages.home');
	}

	public function store(CreateAddressRequest $request)
	{
		//method won't fire until validation is complete
		Address::create($request->all() );
		return redirect('thankyou');  //return named route from controller

	}

	public function thankyou()
	{
		return view('pages.thankyou');
	}
	
	public function hotel()
	{
		return redirect()->away('https://www.starwoodmeeting.com/Book/GradertMcKellarWedding');
	}

}
