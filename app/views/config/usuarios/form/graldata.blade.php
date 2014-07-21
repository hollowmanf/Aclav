<section class="panel">
<header class="panel-heading">Formulario</header>

<div class="panel-body">

	<div class="form-group">
		{{ Form::label('label', 'Usuario', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('usuario', Input::old('usuario'), array('class'=>'form-control' ,'placeholder' => 'Usuario')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('label', 'Password', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
		{{ Form::text('password', Input::old('password'), array('class'=>'form-control' ,'placeholder' => 'Password')) }}
		</div>
	</div>


	<div class="form-group">
		{{ Form::label('label', 'Grupos', array('class' => 'col-sm-2 control-label')) }}
	
		<div class="col-sm-10">
			{{ Form::select('profiles_id', $perfiles , Input::old('profiles_id') , array('class'=>'form-control')  );}}
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





			                                    



	
