@extends('template-2.template')


@section('content')


<section class="panel">
<header class="panel-heading">Formulario</header>

<div class="panel-body">

	{{ Form::open(array('class' => 'form-horizontal ','role'=>'form', 'enctype' => 'multipart/form-data')) }}

	<div class="form-group">
		{{ Form::label('label', 'Temporada', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('nombre_temporada', Input::old('usuario'), array('class'=>'form-control' ,'placeholder' => 'Nombre Temporada')) }}
		</div>
	</div>

	<div class="form-group">

	    {{ Form::label('Fecha Inicio', 'Fecha Inicio', array('class' => 'col-sm-2 control-label')) }}

	    <div class="col-sm-3">
	        
	        <div class="input-group mg-b-md input-append date datepicker" data-date="12-02-2013" data-date-format="dd-mm-yyyy">
	           
			{{ Form::text('fecha_inicio', Input::old('fecha_inicio'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}
			    
		        <span class="input-group-btn">
		        	<button class="btn btn-white add-on" type="button">
		        		<i class="fa fa-calendar"></i>
		        	</button>
		        </span>
	        </div>
	    </div>
	</div>

<div class="form-group">

	    {{ Form::label('Fecha Final', 'Fecha Final', array('class' => 'col-sm-2 control-label')) }}

	    <div class="col-sm-3">
	        
	        <div class="input-group mg-b-md input-append date datepicker" data-date="12-02-2013" data-date-format="dd-mm-yyyy">
	           
			{{ Form::text('fecha_final', Input::old('fecha_final'), array('class'=>'form-control' ,'placeholder' => 'dd-mm-yyyy')) }}

	    
		        <span class="input-group-btn">
		        	<button class="btn btn-white add-on" type="button">
		        		<i class="fa fa-calendar"></i>
		        	</button>
		        </span>
	        </div>
	    </div>
	</div>



	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>

	    <div class="col-sm-4">
	        {{ Form::submit('Guardar', array('class' => 'btn')) }}
	    </div>
	</div>
  {{ Form::close() }}

</div>
</section>


@stop



			                                    



	
