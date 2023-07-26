<?php
include_once 'Modelo/clsconexion.php';

class clsLogin extends clsconexion{

	
	public function buscausuario($usuario,$passw)
	{
		$sql = "CALL `ps_buscarusuario`('$usuario','$passw');";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}	
	
	public function ingresausuario($nom,$apa,$ama,$correo,$direccion,$colonia,$municipio,$sex,$fechana,$tel,$usuario,$passw,$Tipo)
	{
		$sql = "CALL `Ps_Insertaruser`('$nom','$apa','$ama','$correo','$direccion','$colonia',$municipio,'$sex','$fechana','$tel','$usuario','$passw','$Tipo');";
       
		$resultado = $this->conectar->query($sql);
		
		return $resultado;
	}
	
	public function ingresarempleado($nom,$apa,$ama,$correo,$direccion,$colonia,$municipio,$sex,$fechana,$tel,$usuario,$passw,$Tipo)
	{
		$sql = "CALL Ps_InsertEmpleados('$nom','$apa','$ama','$correo','$direccion','$colonia',$municipio,'$sex','$fechana','$tel','$usuario','$passw','$Tipo');";
       
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

}
?>