<?php
include_once 'Modelo/clsconexion.php';

class clsPrendas extends clsconexion{

	public function insertarprendas($nombre,$descripcion,$tipo,$precio,$stock,$img)
        {
            $sql = "CALL `Ps_InsertPrendas`('$nombre','$descripcion','$tipo',$precio,$stock,'$img');";
            $resultado = $this->conectar->query($sql);	
            return $resultado;
        }

        public function consultatiporopa()
        {
            $sql = "CALL `Ps_consultatipoderopa`();";
            $resultado = $this->conectar->query($sql);	
            return $resultado;
        }
      
        public function consultacatalogo()
        {
            $sql = "CALL `Ps_catalogoropa`();";
            $resultado = $this->conectar->query($sql);	
            return $resultado;
        }
        public function consultaRopaDetalle($idPrenda)
        {
            $sql = "select * from prendas where prendas_id='$idPrenda';";
            $resultado = $this->conectar->query($sql);	
            return $resultado;
        }
        public function actuimagenprenda($idprenda,$imagenData2)
        {
            $sql = "CALL `Ps_actualizaimagenprenda`('$idprenda','$imagenData2');";
            $resultado = $this->conectar->query($sql);	
            return $resultado;
        }
        
        public function actualizarprendas($nombre,$descripcion,$precio,$stock,$idprenda)
        {  
            $sql = "CALL `SP_Actualiza_Prendas`('$nombre','$descripcion',$precio,$stock,$idprenda);";
            $resultado = $this->conectar->query($sql);	
            return $resultado;
        }
        
        public function eliminarprenda($idprenda)
        {
            $sql = "CALL `Ps_eliminarprenda`($idprenda);";
            $resultado = $this->conectar->query($sql);	
            return $resultado;
        }

        
}


?>
