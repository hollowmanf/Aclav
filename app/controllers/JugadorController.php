<?php

class JugadorController extends BaseController
{

	protected $moduloId = '1';

	public function getIndex()
	{
		if(!parent::validarPermisos($this->moduloId,'listar'))
		{
			return Redirect::to('home')->with('warning','Acceso denegado a esta seccion');
		}
		
		$rest['jugador'] 	= Jugador::all();
		$rest['action']		= "create";
		$rest['section']	= 'list';

		return View::make('jugador.index')->with($rest);
		
	}


	public function getNew()
	{
		if(!parent::validarPermisos($this->moduloId,'crear'))
		{
			return Redirect::to('jugador')->with('warning','Acceso denegado a esta seccion');
		}

		$rest['action'] 	= "create";
		$rest['section']	= 'form';

		$rest['equipo']		= Equipo::lists('nombre','id');
		$rest['pais']		= Pais::lists('pais','id');

		return View::make('jugador.index')->with($rest);
	}


	public function postNew()
	{
		
		if(Jugador::create(Input::all()))
		{
			return Redirect::to('jugador')->with('success','Registro creado Correctamente');

		}else{

			return Redirect::to('jugador')->with('danger','Error');
		}


		/*
		if($this->saveDataFromRequest('new'))
		{
			return Redirect::to('jugador')->with('success','Registro creado Correctamente');

		}else{

			return Redirect::to('jugador')->with('danger','Error');
		}*/

	
	}


	public function getDel($id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'borrar'))
		{
			return Redirect::to('jugador')->with('warning','Acceso denegado a esta seccion');
		}
		$jugador = Jugador::find(Crypt::decrypt($id));
		$jugador->delete();
		return Redirect::to('jugador')->with('success','Registro Eliminado Correctamente');
	}


	public function getEdit($id = null)
	{
		if(!parent::validarPermisos($this->moduloId,'editar'))
		{
			return Redirect::to('jugador')->with('warning','Acceso denegado a esta seccion');
		}
		$rest['jugador'] 	= Jugador::find(Crypt::decrypt($id));
		$rest['action'] 	= "edit";
		$rest['section']	= 'form';

		$rest['equipo']		= Equipo::lists('nombre','id');
		$rest['pais']		= Pais::lists('pais','id');

		return View::make('jugador.index')->with($rest);
	}

	public function postEdit($id = null)
	{
		$jugadorNuevo = Jugador::find(Crypt::decrypt($id));
		$jugadorNuevo->fill(Input::all());
	


		if(	$jugadorNuevo->save())
			{
				return Redirect::to('jugador')->with('success','Registro editado Correctamente');
			
			}else{

				return Redirect::to('jugador')->with('danger','Error');
			}


		/*if($this->saveDataFromRequest('edit', Crypt::decrypt($id)))
		{
			return Redirect::to('jugador')->with('success','Registro editado Correctamente');
		
		}else{

			return Redirect::to('jugador')->with('danger','Error');
		}*/
		
	}

	
	public function getDetalle($id=null)
	{

		$rest['jugador'] 	= Jugador::find(Crypt::decrypt($id));
		$rest['section']	= 'detalle';

		return View::make('jugador.index')->with($rest);
	}


	
	

}


?>