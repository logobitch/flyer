<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Image;
class FlyerPhoto extends Model
{
	protected $table = 'flyer_photos';

	protected $fillable = ['name', 'thumb_path', 'photo_path'];

	protected  $baseDir = 'uploads/photos';

	protected $file;

	protected static function boot()
	{
		static::creating(function($photo){
			return $photo->upload();
		});
	}
	/**
	 * A flyerphoto belongs to a flyer
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function flyer()
	{
		return $this->belongsTo('App\Flyer');
	}

	public static function fromFile($file)
	{
		$photo = new static;
		$photo->file = $file;

		return $photo->fill([
			'name' => $photo->fileName(),
			'photo_path' => $photo->filePath(),
			'thumb_path' => $photo->thumbPath(),
		]);
	}

	public function fileName()
	{
		$name = sha1(
			time() . $this->file->getClientOriginalName()
		);

		$extension = $this->file->getClientOriginalExtension();

		return "{$name}.{$extension}";
	}

	public function filePath()
	{
		return $this->baseDir . '/' . $this->fileName();
	}

	public function thumbPath()
	{
		return $this->baseDir . '/tp-' . $this->fileName();
	}

	public function upload()
	{
		$this->file->move($this->baseDir, $this->fileName());

		$this->makeThumb();

		return $this;
	}
	protected function makeThumb()
	{
		Image::make($this->filePath())
			->fit(150)
			->save($this->thumbPath());
	}

}
