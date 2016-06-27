<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class FlyerPhoto extends Model
{
	protected $table = 'flyer_photos';

	protected $fillable = ['name', 'thumb_path', 'photo_path'];

	protected  $baseDir = 'uploads/photos';

	protected $file;

	/**
	 * A flyerphoto belongs to a flyer
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function flyer()
	{
		return $this->belongsTo('App\Flyer');
	}

	public function setNameAttribute($name)
	{
		$this->attributes['name'] = $name;

		$this->photo_path = $this->baseDir .'/'.$name;
		$this->thumb_path = $this->baseDir .'/tp'.$name;
	}

	public function baseDir()
	{
		return $this->baseDir;
	}
}
