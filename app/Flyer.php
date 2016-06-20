<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
	protected $table = 'flyers';

	/**
	 * These fields can be create
	 * @var array
	 */
	protected $fillable = [
		'street',
		'city',
		'zip',
		'state',
		'country',
		'price',
		'description',
	];
	/**
	 * A flyer is composed of many photos
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function photos()
	{
		return $this->hasMany('App\FlyerPhoto');
	}
	/**
	 * A Flyer belongs to a user
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function owner()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * check if this flyer is belongs to a user
	 * @param User $user
	 * @return bool
	 */
	public function ownedBy(User $user)
	{
		return $this->user_id == $user->id;
	}
	/**
	 * Find the Flyer by given address
	 * @param string        $zip
	 * @param string        $street
	 * @return mixed
	 */
	public static function LocatedAt($zip, $street)
	{
		$street = str_replace('-', ' ', $street);
		return static::where(compact('zip', 'street'))->firstOrFail();
	}

	public function getPriceAttribute($price)
	{
		return number_format($price);
	}

	public function addPhoto(FlyerPhoto $photo)
	{
		$this->photos()->save($photo);
	}
}
