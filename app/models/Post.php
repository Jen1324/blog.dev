<?php

use Carbon\Carbon;

class Post extends BaseModel 
{

	// The db table this model relates to
    protected $table = 'posts';
    protected $imgDir = 'img-upload';

    // Validation rules for our model properties
    static public $rules = [
    	'title' => 'required|max:100'
    ];

	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
	public function addUploadedImage($image)
	{
		$systemPath = public_path() . '/' . $this->imgDir . '/';

		$imageName = $this->id . '-' . $image->getClientOriginalName();

		$image->move($systemPath, $imageName);

		$this->img_path = '/' . $this->imgDir . '/' . $imageName;
	}

	public function renderBody($dirtyHTML)
	{
		$dirtyHTML = Parsedown::instance()->parse($this->body);
		$config = HTMLPurifier_Config::createDefault();
		$purifier = new HTMLPurifier($config);
		return $purifier->purify($dirtyHTML);
	}
}
