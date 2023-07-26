<?php

include_once 'Modelo/clsResponsable.php';

class controladorresponsable
{
	private $vista;
    public function AgregarDatalle()
    {
     $vista="Vistas/Administracion/frmdetalleproducto.php";
     include_once("Vistas/frmplantillaadmi.php");
    }	
	public function insertarDetalle()
	{
		$detalle=new clsResponsable();
		
		if(!empty($_POST))
		{
			$prenda=$_POST['txtprenda'];
			$talla=$_POST['txttalla'];
            $precio=$_POST['"txtprecio'];
            $existencia=$_POST['txtexistencia'];

			$detalle->InsertarResponsable($prenda,$talla,$precio,$existencia);
			$Consulta=$detalle->ConsultaResponsable();
			$vista="Vistas/Administracion/frmdetalleproducto.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
			
		}
		else
		{
			$Consulta=$detalle->ConsultaResponsable();
			$vista="Vistas/Administracion/frmdetalleproducto.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
		}
	}
	public function ActualizarXEliminar()
	{	
	
		$detalle=new clsResponsable();
		if(!empty($_POST))
		{
			if(isset($_POST['btnActualizar']))
			{
				$idprendastipo=$_POST['txtid'];
				$prenda=$_POST['txtprenda'];
			    $talla=$_POST['txttalla'];
                $precio=$_POST['"txtprecio'];
                $existencia=$_POST['txtexistencia'];

				$detalle->Actualizar1($prenda,$talla,$precio,$existencia,$idprendastipo);
				$responsable=new clsResponsable();
				$Consulta=$detalle->ConsultaResponsable();
				$vista="Vistas/Administracion/frmdetalleproducto.php";
				include_once("Vistas/Inicio/frmplantillaadmi.php");
			}
			else if(isset($_POST['btnEliminar']))
			{
				
				$idprendastipo=$_POST['txtid'];
				$detalle->EliminarResponsable($idprendastipo);
				$responsable=new clsResponsable();
				$Consulta=$detalle->ConsultaResponsable();
				$vista="Vistas/Administracion/frmdetalleproducto.php";
				include_once("Vistas/Inicio/frmplantillaadmi.php");
			}
			
		}
		else
		{
			$Consulta=$detalle->ConsultaResponsable();
			$vista="Vistas/Administracion/frmdetalleproducto.php";
        	include_once("Vistas/Inicio/frmplantillaadmi.php");
		}

    }
}
?>