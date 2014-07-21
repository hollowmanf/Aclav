<?php
 
class LoginController extends BaseController
{

	public function getIndex()
	{

	
	}
	public function logIn(){
		

		if(Auth::attempt(array('usuario' => Input::get('usuario'), 'password' => Input::get('password'))))
		{
			return Redirect::to('home');
		}
		
		return View::make('login');
	}



	public function logOut()
	{
		Auth::logout();
		
		return View::make('login');
	}	
}

?>