<?php

include_once 'Modelo/clsResponsable.php';

class controladorresponsable
{
	private $vista;
    public function Accederresponsable()
    {
     $vista="Vistas/Acceso/Administracion/frmresponsable.php";
     include_once("Vistas/frmplantillaadmi.php");
    }	
	public function insertarResponsable()
	{
		$responsable=new clsResponsable();
		
		if(!empty($_POST))
		{
			$ap=$_POST['txtap'];
			$am=$_POST['txtam'];
            $nombre=$_POST['txtnombre'];
			$responsable->InsertarResponsable($ap,$am,$nombre);
			$Consulta=$responsable->ConsultaResponsable();
			$vista="Vistas/Acceso/Administracion/frmresponsable.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
			
		}
		else
		{
			$Consulta=$responsable->ConsultaResponsable();
			$vista="Vistas/Acceso/Administracion/frmresponsable.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
		}
	}
	public function ActualizarXEliminar()
	{	
	
		$responsable=new clsResponsable();
		if(!empty($_POST))
		{
			if(isset($_POST['btnActualizar']))
			{
				$idresponsable=$_POST['txtid'];
				$ap=$_POST['txtap'];
				$am=$_POST['txtam'];
				$nombre=$_POST['txtnombre'];

				$responsable->Actualizar1($ap,$am,$nombre,$idresponsable);
				$responsable=new clsResponsable();
				$Consulta=$responsable->ConsultaResponsable();
				$vista="Vistas/Acceso/Administracion/frmresponsable.php";
				include_once("Vistas/Inicio/frmplantillaadmi.php");
			}
			else if(isset($_POST['btnEliminar']))
			{
				
				$idresponsable=$_POST['txtid'];
				$responsable->EliminarResponsable($idresponsable);
				$responsable=new clsResponsable();
				$Consulta=$responsable->ConsultaResponsable();
				$vista="Vistas/Acceso/Administracion/frmresponsable.php";
				include_once("Vistas/Inicio/frmplantillaadmi.php");
			}
			
		}
		else
		{
			$Consulta=$responsable->ConsultaResponsable();
			$vista="Vistas/Acceso/Administracion/frmresponsable.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
		}

    }  
	public function insertarProveedor()
	{
		$provedor=new clsResponsable();
		
		if(!empty($_POST))
		{
            $nombre=$_POST['nombre'];
            $colonia=$_POST['selecolonia'];
			$municipio=$_POST['selectmunicipio'];
            $telefono=$_POST['telefono'];
			$provedor->InsertarProveedor($nombre,$colonia,$municipio,$telefono);
			$provedor=new clsResponsable();
			$Consultapro=$provedor->consultaprov();
			$provedor=new clsResponsable();
			$consulta=$provedor->consultamunicipio();
			$vista="Vistas/Acceso/Proveedores/frmProveedores.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
			
		}
		else
		{   
			$Consultapro=$provedor->consultaprov();
			$provedor=new clsResponsable();
			$consulta=$provedor->consultamunicipio();
			$vista="Vistas/Acceso/Proveedores/frmProveedores.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
		}
	
	}


		public function Consultaprovedor()
		{    
			$provedor=new clsResponsable();
			$Consultapro=$provedor->consultaprov();
			$vista="Vistas/Acceso/Proveedores/frmProveedores.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
		
		}
		public function Consultausuarios()
		{    
			$provedor=new clsResponsable();
			$Consultaclient=$provedor->Consultauser();
			$vista="Vistas/Acceso/Administracion/frmconsultauser.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
		
		}
}
?>