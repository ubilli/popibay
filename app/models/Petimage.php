<?php

class Petimage extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pet_images';

	protected $primaryKey='id';

	// relation
	public function petad()
	{
		return $this->belongsTo('Petad','petad_id');
	}
	

}
