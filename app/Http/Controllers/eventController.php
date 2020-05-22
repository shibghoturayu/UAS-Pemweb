<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class eventController extends Controllers
{
	
	public function up()
	{
		Schema::create('event', function (blueprint $table)){
			$table->increments('id');
			$table->string('nama');
			$table->string('kategori');
			$table->date_add('tanggal');
			$table->time('jam');
			$table->string('harga');
			$table->get_location('tempat');
			$table->link('link');
			$table->number('cp');
			$table->string('syarat');
		}
	}
}
