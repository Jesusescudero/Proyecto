<?php


class controladorprincipal
{
	private $vista;
	

	public function inicio()
	{	
		$vista="Vistas/Inicio/frmcontenidopublico.php";
        include_once("Vistas/frmplantilla.php");
    } 
	
	public function iniciouser()
	{	
		$vista="Vistas/Inicio/frmcontenidopublico.php";
        include_once("Vistas/frmplantillacliente.php");
    } 
	

	public function inicioadmi()
	{	
		$vista="Vistas/Inicio/frmcontenidopublico.php";
		include_once("Vistas/Inicio/frmplantillaadmi.php");
   
    } 

}
?>