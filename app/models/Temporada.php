<?php

class Temporada extends Eloquent
{

	protected $table = 'temporada';
	protected $fillable = array('nombre_temporada','fecha_inicio','fecha_final','torneo_id');

	
	public function getFechaInicioAttribute($value)
	{
		$value = date("d-m-Y",strtotime($value)); 
		return $value;
	}

	public function setFechaInicioAttribute($value)
	{
		$fecha = date("Y-m-d",strtotime($value)); 
		$this->attributes['fecha_inicio']	=	$fecha;

	}

	public function getFechaFinalAttribute($value)
	{
		$value = date("d-m-Y",strtotime($value)); 
		return $value;
	}

	public function setFechaFinalAttribute($value)
	{
		$fecha = date("Y-m-d",strtotime($value)); 
		$this->attributes['fecha_final']	=	$fecha;

	}


}
?>