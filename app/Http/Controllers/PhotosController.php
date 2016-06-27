<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Http\Requests;
use App\Flyers\AddPhotoToFlyer;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddPhotoRequest;
class PhotosController extends Controller
{
	/**
	 * @param string        $zip
	 * @param string        $street
	 * @param AddPhotoRequest $request
	 */
	public function store($zip, $street, Requests\AddPhotoRequest $request)
	{

		$flyer = Flyer::locatedAt($zip, $street);

		$photo = $request->file('photo');

		(new AddPhotoToFlyer($flyer, $photo))->save();

	}
}
