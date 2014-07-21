<section class="panel">

<div class="panel-body">

	

<form method="POST">

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Modulo</th>
				<th>Crear</th>
				<th>Borrar</th>
				<th>Editar</th>
				<th>Listar</th>
			</tr>
		</thead>
		<tbody>

				@foreach($perfil as $perfiles)
				<tr>				
					<td>{{$perfiles->modulo}}</td>
					
										<input type="hidden" name="idRecord[]" value="{{ $perfiles->profile($idPerfil)->first()->id }}">

										<td>
											<label class="checkbox checkbox-custom">
											<input name="crear_{{ $perfiles->profile($idPerfil)->first()->id }}"  type="checkbox" @if($perfiles->profile($idPerfil)->first()->crear == 1){{ 'checked'}} @endif >
											<i class="checkbox"></i>
											</label>
										</td>
										<td>
											<label class="checkbox checkbox-custom">
											<input name="borrar_{{ $perfiles->profile($idPerfil)->first()->id  }}" type="checkbox" @if($perfiles->profile($idPerfil)->first()->borrar == 1){{ 'checked'}} @endif  >
											<i class="checkbox"></i>
											</label>
										</td>
										<td>
											<label class="checkbox checkbox-custom">
											<input name="editar_{{ $perfiles->profile($idPerfil)->first()->id }}" type="checkbox"  @if($perfiles->profile($idPerfil)->first()->editar == 1){{ 'checked'}} @endif >
											<i class="checkbox"></i>
											</label>
										</td>
										<td>
											<label class="checkbox checkbox-custom">
											<input name="listar_{{$perfiles->profile($idPerfil)->first()->id  }}" type="checkbox"  @if($perfiles->profile($idPerfil)->first()->listar == 1){{ 'checked'}} @endif >
											<i class="checkbox"></i>
											</label>
										</td>
		

				</tr>
				@endforeach

					</tr>
				
			
			
		</tbody>
	</table>

<button class="btn btn-default" type="submit">Actualizar</button>

</form>
</div>
</section>




			                                    



	
