<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Classes extends Eloquent implements UserInterface, RemindableInterface {
	 
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'classes';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function Sections()
    {
        return $this->hasMany('Section');
    }

    public function subject()
    {
        return $this->belongsToMany('Subject', 'class_subject', 'classes_id', 'subject_id');
    }


}
