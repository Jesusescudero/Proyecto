<?php
include_once 'Modelo/clsconexion.php';

class clsResponsable extends clsconexion{

	public function InsertarResponsable($ap,$am, $nombre)
	{
		$sql ="CALL Ps_InsertResponsable('$ap','$am','$nombre');";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
    public function ConsultaResponsable()
    {
        $sql ="SELECT *FROM responsable;";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
    }
	public function Consultauser()
    {
        $sql ="SELECT *FROM usuarios;";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
    }
	public function EliminarResponsable($idresponsable)
	{
		$sql="CALL SP_Elimina_Responsable('$idresponsable');";

		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	public function Actualizar1($ap,$am,$nombre,$idresponsable)
	{
		$sql = "CALL SP_Actualiza_Responsable('$ap','$am','$nombre','$idresponsable');";
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
    }
	public function InsertarProveedor($nombre,$colonia,$municipio,$telefono)
	{
		$sql ="CALL Ps_Provedores('$nombre','$colonia',$municipio,$telefono);";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
    
	public function ConsultaProveedor()
    {
        $sql ="SELECT *FROM proveedores;";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
    }
	public function consultadireccion()
    {
    $sql = "SELECT direccion_id, colonia FROM direcciones;";
    $resultado = $this->conectar->query($sql);	
    return $resultado;
    }

   public function consultamunicipio()
   {
    // Preparar la consulta utilizando prepared statements para mayor seguridad.
    $sql = "CALL Ps_consultamunicipio()";
    $resultado = $this->conectar->query($sql);	
    return $resultado;
   }
	public function consultaprov()
		{
		$sql = "CALL ps_consultaprovedor();";
		$resultado = $this->conectar->query($sql);	
		return $resultado;
		}
}
?>
