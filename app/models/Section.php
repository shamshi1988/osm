<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Section extends Eloquent implements UserInterface, RemindableInterface {
	 	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sections';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	public function Classes()
    {
        return $this->belongsTo('Classes');
    }

    public function teachers(){

    	return $this->belongsToMany('Teacher', 'class_teacher', 'section_id', 'teachers_id');
    }

    public function classteacher(){

    	return $this->belongsToMany('Teacher', 'section_teacher', 'section_id', 'teachers_id');
    }
}
