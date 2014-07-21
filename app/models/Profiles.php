<?php

class Profiles extends Eloquent
{
	
	Protected	$table = 'profiles';
	protected $fillable = array('grupo');

	public function User()
	{
		return $this->hasOne('User','profiles_id');
	}

	
}