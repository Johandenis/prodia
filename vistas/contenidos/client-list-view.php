<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE BECARIOS
	</h3>
	<p class="text-justify">
	Podremos visualizar la lista de becarios ademas de eso podemos Registrar la información básica de cada becario, como el DNI, nombre, apellido, teléfono y dirección, facilitando así la gestión de la lista de becarios.
	</p>
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<a href="<?php echo SERVERURL; ?>client-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR BECARIO</a>
		</li>
		<li>
			<a class="active" href="<?php echo SERVERURL; ?>client-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE BECARIOS</a>
		</li>
		<li>
			<a href="<?php echo SERVERURL; ?>client-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR BECARIO</a>
		</li>
	</ul>	
</div>

<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-dark table-sm">
			<thead>
				<tr class="text-center roboto-medium">
					<th>#</th>
					<th>DNI</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>TELEFONO</th>
					<th>DIRECCIÓN</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-center" >
					<td>1</td>
					<td>012342567</td>
					<td>NOMBRE DEL ESTUDIANTE</td>
					<td>APELLIDO DEL ESTUDIANTE</td>
					<td>72349874</td>
					<td>
						<button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
							<i class="fas fa-info-circle"></i>
						</button>
					</td>
					<td>
						<a href="<?php echo SERVERURL; ?>client-update/" class="btn btn-success">
								<i class="fas fa-sync-alt"></i>	
						</a>
					</td>
					<td>
						<form action="">
							<button type="button" class="btn btn-warning">
									<i class="far fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>
				<tr class="text-center" >
					<td>2</td>
					<td>012342567</td>
					<td>NOMBRE DEL ESTUDIANTE</td>
					<td>APELLIDO DEL ESTUDIANTE</td>
					<td>72349874</td>
					<td>
						<button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
							<i class="fas fa-info-circle"></i>
						</button>
					</td>
					<td>
						<a href="<?php echo SERVERURL; ?>client-update/" class="btn btn-success">
								<i class="fas fa-sync-alt"></i>	
						</a>
					</td>
					<td>
						<form action="">
							<button type="button" class="btn btn-warning">
									<i class="far fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>
				<tr class="text-center" >
					<td>3</td>
					<td>012342567</td>
					<td>NOMBRE DEL ESTUDIANTE</td>
					<td>APELLIDO DEL ESTUDIANTE</td>
					<td>72349874</td>
					<td>
						<button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
							<i class="fas fa-info-circle"></i>
						</button>
					</td>
					<td>
						<a href="<?php echo SERVERURL; ?>client-update/" class="btn btn-success">
								<i class="fas fa-sync-alt"></i>	
						</a>
					</td>
					<td>
						<form action="">
							<button type="button" class="btn btn-warning">
									<i class="far fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>
				<tr class="text-center" >
					<td>4</td>
					<td>012342567</td>
					<td>NOMBRE DEL ESTUDIANTE</td>
					<td>APELLIDO DEL ESTUDIANTE</td>
					<td>72349874</td>
					<td>
						<button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
							<i class="fas fa-info-circle"></i>
						</button>
					</td>
					<td>
						<a href="<?php echo SERVERURL; ?>client-update/" class="btn btn-success">
								<i class="fas fa-sync-alt"></i>	
						</a>
					</td>
					<td>
						<form action="">
							<button type="button" class="btn btn-warning">
									<i class="far fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav>
</div>