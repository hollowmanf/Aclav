<?php

class MenuController extends BaseController
{
	
	protected $moduloId ;
	protected $carpetaModulo  = 'config.menu';
	protected $ruta           = 'menu';


	public function __construct()
	{
	    //$modulo         = Modulos::where('modulo','=', 'menu')->first();
	    //$this->moduloId = $modulo->id; 

	}

	public function getIndex()
	{
		$data['modulos']	= 	Modulos::lists('modulo','id');
		$data['modelos']	=	Menu::all();
		$data['modulo']		= 	'menu';
		$data['action']		=	'create';

		return View::make($this->carpetaModulo.'.index')->with($data);
	}


	public function getNew()
	{	
		$data['equipos'] = Equipo::all();
		return View::make('torneo.create2')->with($data);
	}


	public function postNew()
	{

	   $input  =   Input::all();
	   
		   if( isset($input['sub']))
		   {
		   		$input['sub'] = 1 ;
		   }
		   else
		   {
		   		$input['sub'] = 0;	
		   }


        if(Menu::create($input))
        {
            return Redirect::to($this->ruta)->with('success','Registro creado Correctamente');

        }else{

            return Redirect::to($this->ruta)->with('danger','Error');
        }
 


	}

	
	
	public function getDel($id = null)
	{
		$modelo = Menu::find(Crypt::decrypt($id))->delete();
		return Redirect::to($this->ruta)->with('success','Registro Eliminado Correctamente');
	}


	

	public function getCrear()
	{
		$data['modulo']		=	'Menu';
		$data['action'] 	= 	'create';
		$data['modulos']	= 	Modulos::lists('modulo','id');

		return View::make('config.menu.form')->with($data);
	}


	public function getEditar($id = null)
	{
		$data['modulo']		=	'Menu';
		$data['modelo']		= 	Menu::find(Crypt::decrypt($id));
		$data['action'] 	= 	'editar';
		$data['modulos']	= 	Modulos::lists('modulo','id');

		return View::make('config.menu.form')->with($data);
	}


	public function postEditar($id= null)
	{


		$menu    =   Menu::find(Crypt::decrypt($id));
        $input   =   Input::all();
        
        $menu->fill($input);
    
        $menu->save();

		return Redirect::to($this->ruta)->with('success','Registro Editado Correctamente');
	}



}
?>