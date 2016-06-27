<?php
namespace App;

use Image;
Class Thumbnail{
	public function make($src, $destination)
	{
		Image::make($src)
			->fit(150)
			->save($destination);
	}
}