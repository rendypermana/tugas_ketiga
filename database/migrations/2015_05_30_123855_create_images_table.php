<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id_image');
			$table->string('image');
			$table->string('title');
	}

	public function down()
	{
		Schema::dropIfExists('images');
	}

}
