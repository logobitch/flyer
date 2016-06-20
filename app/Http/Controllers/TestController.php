<?php

namespace App\Http\Controllers;

use App\Flyer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
	public function index()
	{
		$flyer = Flyer::firstOrFail();
		return view('test', compact('flyer'));
	}

	public function addPhotos($zip, $street, Request $request)
	{
		dd($request->file('file'));
	}
}
