<section class="panel">
<header class="panel-heading">Formulario</header>

<div class="panel-body">

	<div class="form-group">
		{{ Form::label('nombreLabel', 'Nombre', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('nombre', Input::old('nombre'), array('class'=>'form-control' ,'placeholder' => 'Nombre Jugador')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('apellidoLabel', 'Apellido', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('apellido', Input::old('apellido'), array('class'=>'form-control' ,'placeholder' => 'Apellido Jugador')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('dniLabel', 'DNI', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('dni', Input::old('dni'), array('class'=>'form-control' ,'placeholder' => 'DNI Jugador','required'=>'required')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('equipoLabel', 'Equipo', array('class' => 'col-sm-2 control-label')) }}
	

		<div class="col-sm-10">
			{{ Form::select('club_id', $equipo , Input::old('club_id') , array('class'=>'form-control')  );}}
		</div>
	</div>
	
	<div class="form-group">
		{{ Form::label('paisLabel', 'Pais', array('class' => 'col-sm-2 control-label')) }}
	

		<div class="col-sm-10">
			{{ Form::select('pais_id', $pais , Input::old('id') , array('class'=>'form-control')  );}}
		</div>
	</div>

	<div class="form-group">
	    <label class="col-sm-3 control-label"></label>

	    <div class="col-sm-4">
	        {{ Form::submit('Guardar', array('class' => 'btn')) }}
	    </div>
	</div>

</div>
</section>





			                                    



	
