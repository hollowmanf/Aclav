<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
 


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	protected $fillable = array('usuario','profiles_id','password');



	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}


	public function permisos($moduloId = null)
	{
		
			//$profile	= Profiles::find(Auth::User()->profiles_id)->id;
			//$modulos 	= Modulos::where('modulo_id','=', $mod )->first();
			//$modulos 	= $modulos->id;


			$profile 	= Auth::User()->profiles_id;
			
			$modulo 	= ProfilesModulos::where('profiles_id','=' , $profile)->where('modulos_id','=', $moduloId)->first();

			//$permiso 	= ProfilesModulos::where('profiles_id','=',$profile)->first();

			return $modulo ;
	}

	public function profiles()
	{

		return	$this->belongsTo('Profiles');
	}
	
	

}