<section class="panel ">
	<div class="panel-body">
		<div class="table-responsive no-border">
			<table class="table table-bordered table-striped mg-t datatable ">
				<thead>
					<tr>
						<th>Usuario </th>
						<th>Grupo</th>
						
						<th class="no-sort" width="8%"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($usuarios as $usuario)
						<tr>
							<td>{{ $usuario->usuario}} </td>
							<td>{{ $usuario->profiles->grupo}} </td>
									
					
							<td>
								<div class="btn-group pull-right">
								<a href="usuarios/edit/{{ Crypt::encrypt($usuario->id) }}" class="btn btn-sm  btn-success " type="button"><i class="fa fa-edit"></i></a>
								<a href="usuarios/del/{{ Crypt::encrypt($usuario->id) }}" class="btn btn-sm  btn-danger " type="button"><i class="fa fa-times-circle "></i></a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>   
			</table>
		</div>
	</div>
</section>