<!-- Page header -->
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
	</h3>
	<p class="text-justify">
	Una herramienta integral para la gestión eficiente de becarios en la Asociación Prodia. Accede y controla de manera sencilla y efectiva toda la información relacionada con los becarios, proyectos, comunicados y usuarios. Optimiza la administración y seguimiento de los programas de becas, manteniendo un registro actualizado y detallado para una toma de decisiones informada.

	</p>
</div>

<!-- Content -->
<div class="full-box tile-container">
	<a href="<?php echo SERVERURL; ?>client-new/" class="tile">
		<div class="tile-tittle">BECARIOS</div>
		<div class="tile-icon">
			<i class="fas fa-users fa-fw"></i>
			<p> Registrados</p>
		</div>
	</a>
	
	<a href="<?php echo SERVERURL; ?>item-list" class="tile">
		<div class="tile-tittle">Archivos</div>
		<div class="tile-icon">
			<i class="fas fa-pallet fa-fw"></i>
			<p> Registrados</p>
		</div>
	</a>

	<a href="<?php echo SERVERURL; ?>reservation-reservation/" class="tile">
		<div class="tile-tittle">COMUNICADOS</div>
		<div class="tile-icon">
			<i class="far fa-calendar-alt fa-fw"></i>
			<p> Registradas</p>
		</div>
	</a>

	<a href="<?php echo SERVERURL; ?>reservation-pending/" class="tile">
		<div class="tile-tittle">PROYECTOS</div>
		<div class="tile-icon">
			<i class="fas fa-hand-holding-usd fa-fw"></i>
			<p> Registrados</p>
		</div>
	</a>

	<a href="<?php echo SERVERURL; ?>reservation-list/" class="tile">
		<div class="tile-tittle">PROYECTOS FINALIZADOS</div>
		<div class="tile-icon">
			<i class="fas fa-clipboard-list fa-fw"></i>
			<p> Registrados</p>
		</div>
	</a>
	<?php if($_SESSION['privilegio_spm']==1){?>
	<a href="<?php echo SERVERURL; ?>user-list/" class="tile">
		<div class="tile-tittle">Usuarios</div>
		<div class="tile-icon">
			<i class="fas fa-user-secret fa-fw"></i>
			<p> Registrados</p>
		</div>
	</a>
	<?php } ?>

</div>