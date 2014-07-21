<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function validarPermisos($modulo = null ,$sector = null)
	{
		//return Auth::User()->permisos($modulo)->$sector;
		
			if(Auth::User()->permisos($modulo)->$sector == '0')
			{
				return false;
			}
			return true;
	}

}