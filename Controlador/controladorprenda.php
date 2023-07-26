<?php
include_once 'Modelo/clsprendas.php';

class controladorprenda
{
	private $vista;
	
	public function agregarprenda()
   {
    $prendas = new clsPrendas();
    
    if (!empty($_POST))
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $tipo = $_POST['tip'];
        $precio = $_POST['precio'];
        $stock = $_POST['cantidad'];
        $img = $_FILES['imagen'];
        $imagenData = file_get_contents($img['tmp_name']);
        $imagenData2 = $prendas->conectar->real_escape_string($imagenData); // Escapar el contenido binario

        // Asegurar que la columna en la base de datos esté configurada como BLOB o similar para almacenar imágenes
        $prendas->insertarprendas($nombre, $descripcion,$tipo,$precio, $stock, $imagenData2);
        $prendas = new clsPrendas();
        $vista = "Vistas/Acceso/Administracion/frmingresarprenda.php";
        include_once("Vistas/Inicio/frmplantillaadmi.php");
    }
    else
    {
        $prendas = new clsPrendas();
        $vista = "Vistas/Acceso/Administracion/frmingresarprenda.php";
        include_once("Vistas/Inicio/frmplantillaadmi.php");
    } 
   }
    
   public function Catalogoropa()
   {
       $prendas = new clsPrendas();

       $catalogo=$prendas->consultacatalogo();
       $vista="Vistas/Acceso/Prendas/frmcataloprendas.php";
       include_once("Vistas/frmplantilla.php");
   }
   public function Catalogoropainicio()
   {
       $prendas = new clsPrendas();

       $catalogo=$prendas->consultacatalogo();
       $vista="Vistas/Acceso/Prendas/frmcataloprendaclient.php";
       include_once("Vistas/frmplantillacliente.php");
   }
      public function Catalogoadmi()
   {
       $prendas = new clsPrendas();
       $catalogo=$prendas->consultacatalogo();
       $vista="Vistas/Acceso/Prendas/frmcataloprendasadmi.php";
       include_once("Vistas/Inicio/frmplantillaadmi.php");
   }
   public function RopaDetalle()
   {
    $prendas = new clsPrendas();
    $idPrenda=$_GET['idP'];
    $catalogoDetalle=$prendas->consultaRopaDetalle($idPrenda);
    $vista="Vistas/Acceso/Prendas/frmprendasDetalle.php";
    include_once("Vistas/frmplantilla.php");
    
   }
   public function RopaDetalleadmi()
   {
    $prendas = new clsPrendas();
    $idPrenda=$_GET['idP'];
    $catalogoDetalle=$prendas->consultaRopaDetalle($idPrenda);
    $vista="Vistas/Acceso/Prendas/frmprendasDetalle.php";
    include_once("Vistas/Inicio/frmplantillaadmi.php");
    
   }
   public function RopaDetalleclien()
   {
    $prendas = new clsPrendas();
    $idPrenda=$_GET['idP'];
    $catalogoDetalle=$prendas->consultaRopaDetalle($idPrenda);
    $vista="Vistas/Acceso/Prendas/frmprendasDetalle.php";
    include_once("Vistas/frmplantillacliente.php");
    
   }
   
   public function administrarPrenda()
	{
		$prendas = new clsPrendas();
		if(!empty($_POST))
		{
           
			if(isset($_POST['btnActualizar']))
			{
              
				$nombre=$_POST['nombre'];
				$descripcion=$_POST['descripcion'];
				$precio=$_POST['precio'];
				$stock=$_POST['cantidad'];
                $idprenda=$_POST['idprenda'];
				$prendas->actualizarprendas($nombre,$descripcion,$precio,$stock,$idprenda);
				$prendas = new clsPrendas();
                $catalogo=$prendas->consultacatalogo();
				$vista="Vistas/Acceso/Administracion/frmadministrarprenda.php";
                include_once("Vistas/Inicio/frmplantillaadmi.php");
			
			}
			else if(isset($_POST['btnEliminar']))
			{
				$idprenda=$_POST['idprenda'];
				$prendas->eliminarprenda($idprenda);
				$prendas = new clsPrendas();
				$catalogo=$prendas->consultacatalogo();
                $vista="Vistas/Acceso/Administracion/frmadministrarprenda.php";
                include_once("Vistas/Inicio/frmplantillaadmi.php");
			}
			else if(isset($_POST['btnGuardar']))
			{  
               
				$idprenda=$_POST['idprenda'];
				$img=$_FILES['txtimagen'];
				$imagenData=file_get_contents($img['tmp_name']);
				$imagenData2=$prendas->conectar->real_escape_string($imagenData);
				$prendas->actuimagenprenda($idprenda,$imagenData2);
				$prendas = new clsPrendas();
				$catalogo=$prendas->consultacatalogo();
                $vista="Vistas/Acceso/Administracion/frmadministrarprenda.php";
                include_once("Vistas/Inicio/frmplantillaadmi.php");
			}
		}
		else{
               $prendas = new clsPrendas();
		       $catalogo=$prendas->consultacatalogo();
               $vista="Vistas/Acceso/Administracion/frmadministrarprenda.php";
                include_once("Vistas/Inicio/frmplantillaadmi.php");
		}
	}


}


?>