<?php


class TemporadaController extends BaseController
{

  protected $moduloId      ;
  protected $carpetaModulo  = 'temporada';
  protected $ruta           = 'temporada';
  protected $modulo 		= 'temporada';


    public function __construct()
    {
        $modulo         = Modulos::where('modulo','=', 'temporada')->first();
        $this->moduloId = $modulo->id; 
    }

    // entra desde el route inicial
    public function getIndex()
    {
       
        if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::to('home')->with('warning','Acceso denegado a esta seccion');
        }
        
        $rest['data']       = Temporada::orderBy('fecha_inicio','DESC')->get();
        $rest['action']     = 'create';
        $rest['section']    = 'list';
        $rest['modulo']     = $this->modulo;

        return View::make($this->carpetaModulo.'.index')->with($rest);
    
    }


    // muestra el formulario para agregar
    public function getNew()
    {
        if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::to($this->ruta)->with('warning','Acceso denegado a esta seccion');
        }

        $rest['action']     = "create";
        $rest['section']    = 'form';
        $rest['modulo']     = 'temporada';
        //$rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'./form/graldata')->with($rest);
    }


    // procesa el formulario para agregar
    public function postNew()
    {
       

       $input               =   Input::all();

  

        if(Temporada::create($input))
        {
            return Redirect::to($this->ruta)->with('success','Registro creado Correctamente');

        }else{

            return Redirect::to($this->ruta)->with('danger','Error');
        }
  

    }


    // procesa el delete
    public function getDel($id = null)
    {
        if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::to($this->ruta)->with('warning','Acceso denegado a esta seccion');
        }

        $usuario = User::find(Crypt::decrypt($id));
        $usuario->delete();

        return Redirect::to($this->ruta)->with('success','Registro Eliminado Correctamente');
    }


    // muestra el formulario con los datos de edicion
   public function getEdit($id = null)
    {

        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::to($this->ruta)->with('warning','Acceso denegado a esta seccion');
        }

        $rest['usuario']    = User::find(Crypt::decrypt($id));
        $rest['action']     = "edit";
        $rest['section']    = 'form';
        $rest['modulo']     = 'usuarios';

        $rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'.index')->with($rest);     
    }



    // procesa el formulario de edicion
    public function postEdit($id = null)
    {
        $usuario    =   User::find(Crypt::decrypt($id));
        $input      =   Input::all();
        
        $pass       =   $input['password'];

            if (Hash::needsRehash($pass))
            {
                $pass = Hash::make($pass);
            }
    
       $input['password'] = $pass;

        $usuario->fill($input);
    
        if( $usuario->save())
            {
                return Redirect::to($this->ruta)->with('success','Registro editado Correctamente');
            
            }else{

                return Redirect::to($this->ruta)->with('danger','Error');
            }
    }

}