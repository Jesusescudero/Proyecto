<?php
include_once 'Modelo/clsconexion.php';

class clsDetalle extends clsconexion{

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
}
?>