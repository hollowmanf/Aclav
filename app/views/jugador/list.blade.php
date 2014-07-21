<section class="panel panel-info">
	<header class="panel-heading">Tabla</header>
	<div class="panel-body">
		<div class="table-responsive no-border">
			<table class="table table-bordered table-striped mg-t datatable">
				<thead>
					<tr>
						<th class="col-sm-1">DNI</th>
						<th>Jugador </th>
						<th class="col-sm-2"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($jugador as $jugadores)
						<tr>
							<td>{{ $jugadores->dni}} </td>
							<td>{{ $jugadores->nombre}} {{$jugadores->apellido}}</td>

							<td>
								<div class="btn-group pull-right">
								<a href="jugador/detalle/{{ Crypt::encrypt($jugadores->id) }}" class="btn btn-sm btn-white" type="button"><i class="fa fa-search"></i></a>
								<a href="jugador/edit/{{ Crypt::encrypt($jugadores->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-edit"></i></a>
								<a href="jugador/del/{{ Crypt::encrypt($jugadores->id) }}" class="btn btn-sm  btn-white" type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>
	</div>
</section>