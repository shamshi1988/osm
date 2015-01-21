<?php


class Subject extends Eloquent {
	
	 
	protected $table = 'subjects';

		
	public function Student()
    {
        return $this->belongsToMany('Subject', 'student_subject', 'subject_id', 'student_id');
    }
    public function classes()
    {
        return $this->belongsToMany('Classes', 'class_subject', 'subject_id', 'classes_id');
    }

}
