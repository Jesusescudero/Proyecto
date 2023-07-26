<?php
session_start();//Con esto indicamos que se estarán manejando sesiones guardadas para utilizarlas en todo el sitio
include_once 'Modelo/clsLogin.php';

class controladorlogin
{
	private $vista;
	
	
	public function inicio()
	{	//index para que aparesca el principal login
		$vista="Vistas/Acceso/frmLogin.php";
		//$vista="Vistas/Inicio/frmcontenidopublico.php";
        include_once("Vistas/frmplantilla.php"); 
    }
	public function inicio2()
	{	//index para que aparesca el principal login
		$vista="Vistas/Acceso/frmLogin.php";
		//$vista="Vistas/Inicio/frmcontenidopublico.php";
        include_once("Vistas/Inicio/frmplantillaadmi.php");
    }
  
	public function Acceder()
	{
		$login = new clsLogin();
		if (!empty($_POST))
		{
			$usuario = $_POST['txtusuario'];
			$passw = $_POST['txtpassword'];
			$datos = $login->buscausuario($usuario, $passw);
			$usuario = $datos->fetch_object(); // Extraemos lo que se obtiene de la consulta
			if ($datos->num_rows > 0) // si es mayor a cero significa que encontró el usuario.
			{
				$_SESSION['TipoUsuario'] = $usuario->tipo; // Aquí vamos a guardar el tipo de usuario que viene de la BD
				if ($_SESSION['TipoUsuario'] == 'Administrador') {
					$vista = "Vistas/Inicio/frmcontenidopublico.php";
					include_once("Vistas/Inicio/frmplantillaadmi.php");
				} else if ($_SESSION['TipoUsuario'] == 'Normal') {
					$vista = "Vistas/Inicio/frmcontenidopublico.php";
					include_once("Vistas/frmplantillacliente.php");
				} else {
					$vista="Vistas/Inicio/frmcontenidopublico.php";
                    include_once("Vistas/frmplantilla.php");
				}
			} else {
				include_once("Vistas/Acceso/frmDenegado.php");
			}
		}
	}
    	
   	public function cerrarsesion()
   	{
   		session_destroy();
   		$vista="Vistas/Acceso/frmLogin.php";
	    include_once("Vistas/frmplantilla.php"); 
   	}

     

	   public function insertuser()
	   {
		   $users=new clsLogin();
		   
		   if(!empty($_POST))
		   {
			
			   $nom=$_POST['nombre'];
			   $apa=$_POST['apaterno'];
			   $ama=$_POST['amaterno'];
			   $correo=$_POST['correo'];
			   $direccion=$_POST['direccion'];
			   $colonia=$_POST['selecolonia'];
			   $municipio=$_POST['selectmunicipio'];
			   $sex=$_POST['selecsexo'];
			   $fechana=$_POST['fechana'];
			   $tel=$_POST['tel'];
			   $usuario=$_POST['usu'];
			   $passw=$_POST['pass'];
			   $Tipo=$_POST['selectTipo'];
			   $users->ingresausuario($nom,$apa,$ama,$correo,$direccion,$colonia,$municipio,$sex,$fechana,$tel,$usuario,$passw,$Tipo);
			   //$vista="Vistas/Acceso/frminsertaruser.php";
			   //para que al momento de refrescar la pagina no tenga errores al obtener los datos
			   $consulta=$users->consultamunicipio();
			   $vista="Vistas/Acceso/frminsertaruser.php";
			   //include_once("Vistas/Inicio/frmplantillaadmi.php");
			   include_once("Vistas/frmplantilla.php");
		   }
		   else
		   {   
			   $consulta=$users->consultamunicipio();
		   //para ver la vista del frminsertar user 
			   $vista="Vistas/Acceso/frminsertaruser.php";
			   //para implementar la plantilla 
			   include_once("Vistas/frmplantilla.php");
		   }
	   }
	   
	   public function insertempleados()
	   {
		   $users=new clsLogin();
		   
		   if(!empty($_POST))
		   {
			
			   $nom=$_POST['nombre'];
			   $apa=$_POST['apaterno'];
			   $ama=$_POST['amaterno'];
			   $correo=$_POST['correo'];
			   $direccion=$_POST['direccion'];
			   $colonia=$_POST['selecolonia'];
			   $municipio=$_POST['selectmunicipio'];
			   $sex=$_POST['selecsexo'];
			   $fechana=$_POST['fechana'];
			   $tel=$_POST['tel'];
			   $usuario=$_POST['usu'];
			   $passw=$_POST['pass'];
			   $Tipo=$_POST['selectTipo'];
			   $users->ingresarempleado($nom,$apa,$ama,$correo,$direccion,$colonia,$municipio,$sex,$fechana,$tel,$usuario,$passw,$Tipo);
			   //$vista="Vistas/Acceso/frminsertaruser.php";
			   $consulta=$users->consultamunicipio();
			   $vista="Vistas/Acceso/frminsertarempleados.php";
			   include_once("Vistas/Inicio/frmplantillaadmi.php");
		   }
		   else
		   {   
			   $consulta=$users->consultamunicipio();
		   //para ver la vista del frminsertar user 
			   $vista="Vistas/Acceso/frminsertarempleados.php";
			   //para implementar la plantilla 
			   include_once("Vistas/Inicio/frmplantillaadmi.php");
		   }
	   }
	   public function acercadeinicio()
	   {	
		   $vista="Vistas/Inicio/Acercade.php";
		   include_once("Vistas/frmplantilla.php"); 
	   }

	   public function acercadecliente()
	   {	
		   $vista="Vistas/Inicio/Acercade.php";
		   include_once("Vistas/frmplantillacliente.php"); 
	   }

	   
    
}
?>