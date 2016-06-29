<?php
namespace App\Flyers;

//use App\Flyers\AddPhotoToFlyer;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Mockery as m;

CLass AddPhotoToFlyerTest extends \TestCase
{
	/** @test **/
	function it_()
	{
		$flyer = factory(\App\Flyer::class)->create();

		$file = m::mock(UploadedFile::class, [
			'getClientOriginalName' => 'foo',
			'getClientOriginalExtension' => 'jpg',
		]);

		$file->shouldReceive('move')
			->once()
			->with('uploads/photos', 'nowfoo.jpg');

		$thumbnail = m::mock(\App\Thumbnail::class);

		$thumbnail->shouldReceive('make')
			->once()
			->with('uploads/photos/nowfoo.jpg', 'uploads/photos/tpnowfoo.jpg');

		$form = new AddPhotoToFlyer($flyer, $file, $thumbnail);

		$form->save();

		$this->assertCount(1, $flyer->photos);
	}
}


function time() {
	return 'now';
}

function sha1($name) {
	return $name;
}