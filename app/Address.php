<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

	protected $fillable = [
		'ContactName',
		'Email',
		'Phone',
		'Address',
		'City',
		'Zip',
		'State',
		'SaveSeat'
	];

}
