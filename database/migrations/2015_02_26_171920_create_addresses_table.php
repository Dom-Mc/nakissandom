<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			 $table->string('ContactName', 50);
			 $table->string('Email', 50);
			 $table->string('Phone', 17);
			 $table->string('Address', 75);
			 $table->string('City', 50);
			 $table->char('Zip', 5);
			 $table->string('State', 20);
			 $table->enum('SaveSeat', [
			 	'empty',
			 	'Yes',
			 	'Maybe',
			 	'ProbablyNot'
			 	]);
			 $table->timestamps();
			 $table->increments('AddressesID');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('addresses');
	}

}
