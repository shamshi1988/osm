<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;
class Teacher extends Eloquent implements UserInterface, RemindableInterface {
	 use HasRole;
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'teachers';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	public function User()
    {
        return $this->belongsTo('User');
    }

    pubic function sections(){

    	return $this->belongsToMany('Section', 'class_teacher', 'teacher_id', 'section_id');
    }
    pubic function classteacher(){

    	return $this->belongsToMany('Section', 'section_teacher', 'teachers_id', 'section_id');
    }

}
