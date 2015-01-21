<?php


class Parent extends Eloquent {
	 

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'parents';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	

	public function User()
    {
        return $this->belongsTo('User');
    }

}
