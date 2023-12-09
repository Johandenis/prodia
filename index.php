<?php
	
	require_once "prodia/config/APP.php";
	require_once "prodia/controladores/vistasControlador.php";

	$plantilla = new vistasControlador();
	$plantilla->obtener_plantilla_controlador();