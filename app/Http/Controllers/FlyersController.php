<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\FlyerPhoto;
use App\Http\Utilities\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class FlyersController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth',['except' => ['show']]);

		parent::__construct();
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//flash()->overlay('This is the title', 'This is the text content');

		$countries = Country::all();
		return view('flyers.create', compact('countries'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Requests\FlyerRequest $request)
	{
		Flyer::create($request->all());

		return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($zip, $street)
	{

//		return Flyer::where(compact('zip', 'street'))->first();
		$flyer =  Flyer::locatedAt($zip, $street);

		return view('flyers.show', compact('flyer'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * @param string        $zip
	 * @param string        $street
	 * @param ChangeFlyerRequest $request
	 */
	public function addPhotos($zip, $street, Requests\ChangeFlyerRequest $request)
	{
		$photo = FlyerPhoto::fromFile($request->file('photo'));
		//$photo = $this->makePhoto($request->file('photo'));
		Flyer::locatedAt($zip, $street)->addPhoto($photo);
	}
}
