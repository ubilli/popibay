<?php

class Petad extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'petads';

	protected $primaryKey='id';
	
	public function petimages()
	{
		return $this->hasMany('Petimage','petad_id');
	}

}
