<?php

use Carbon\Carbon;

class Post extends BaseModel 
{

	// The db table this model relates to
    protected $table = 'posts';

    // Validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100'
    ];

	public function getTitleAttribute ($value)
	{
		return ($value);
	}

	// public function setTitleAttribute($value)
	// {
	// 	$this->attributes['title'] = "something";
	// 	return strtoupper($value);
	// }

	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}


// input::get()

?>