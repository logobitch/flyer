<?php
namespace App\Flyers;

use App\Flyer;
use App\Thumbnail;
use App\FlyerPhoto;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddPhotoToFlyer{
	protected $flyer;
	protected $file;

	public function __construct(Flyer $flyer, UploadedFile $file, Thumbnail $thumbnail = null)
	{
		$this->flyer = $flyer;
		$this->file = $file;
		$this->thumbnail = $thumbnail ?: new Thumbnail;
	}

	public function save()
	{
		$photo = $this->flyer->addPhoto($this->makePhoto());

		$this->file->move($photo->baseDir(), $photo->name);

		$this->thumbnail->make($photo->photo_path, $photo->thumb_path);
	}

	public function makePhoto()
	{
		return new FlyerPhoto(['name'=>$this->makeFileName()]);
	}
	protected function makeFileName()
	{
		$name = sha1(
			time() . $this->file->getClientOriginalName()
		);

		$extension = $this->file->getClientOriginalExtension();

		return "{$name}.{$extension}";
	}
}