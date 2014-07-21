<?php 

class Jugador extends Eloquent
{
	
	protected $table = 'jugador';

 	protected $fillable = array('nombre', 'apellido', 'dni','club_id','pais_id');
 
}

?>