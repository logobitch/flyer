<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
	protected $table = 'destinations';

	protected $fillable = [
		'name',
		'parent_id',
		'en_name'
	];

	public $timestamps = false;
}
