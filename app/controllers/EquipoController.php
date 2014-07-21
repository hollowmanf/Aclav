<?php

class EquipoController extends BaseController
{

	public function getIndex()
	{
		
		$rest['equipo'] 	= $this->listar();

		return View::make('club.equipo.index')->with($rest) ;

	}

	public function listar()
	{
		$equipo = array('Boca Masculino','Boca Femenino', 'River Masculino', 'River Femenino');

		return $equipo;

	}
	
}
?>