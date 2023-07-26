<?php
include_once 'Modelo/clsconexion.php';

class clsReportes extends clsconexion{

    public function reportecliente($gmail)
    {
    
        $sql = "SELECT usuario_id,nombre,apaterno,amaterno,email,telefono FROM usuarios 
        WHERE email= '$gmail'";
        $resultado = $this->conectar->query($sql);	
        return $resultado;
    
    }

}
?>
