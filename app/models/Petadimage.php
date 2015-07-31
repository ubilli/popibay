<?php

class Petadimage extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'petad_images';

	protected $primaryKey='id';

	// petad_image relation with petad
	/*public function petad()
	{
		return $this->hasMany('Petad','petad_id');
	}

	// petad_image relation with petad
	public function images()
	{
		return $this->hasMany('Petimage','image_id');
	}*/
	

}
