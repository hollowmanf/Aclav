<?php

class TorneoController extends BaseController
{
	protected $moduloId       = '3';
	protected $carpetaModulo  = 'config.usuarios';
	protected $ruta           = 'usuarios';


	public function getIndex()
	{
		return View::make('torneo.index');
	}

	public function getNew()
	{

		$data['equipos'] = Equipo::all();

		return View::make('torneo.create')->with($data);
		
	}
	public function getEdit()
	{
		return Input::all();
	}
}

?>