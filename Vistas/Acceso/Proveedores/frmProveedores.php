
<div class="proveedor">
      <link rel="stylesheet" href="Estilos/Proveedores.css">
      <form class="form" action="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=insertarProveedor" method="POST">

         <h2>Ingresar proveedores</h2> 

            <div>
            <label for="nombre">Nombre del proveedor:</label>
               <input type="text" name="nombre" id="Nom" placeholder="Nombre" required>
            </div>  
            <div>
         <label for="">Colonia</label>
            <input type="text" id=colonia name="selecolonia" required>
         </div>
         <div>
            <label for="municipio">Municipio:</label>
            <select name="selectmunicipio" id="municipio" required>
            <option value="">Selecciona el municipio</option>
            <?php while ($filas = $consulta->fetch_object()) { ?>
            <option value="<?php echo $filas->idmunicipio; ?>"><?php echo $filas->municipio; ?></option>
            <?php } ?>
            </select><br><br>
         </div>
         
            <div>
            <label for="telefono">Telefono:</label>
               <input type="text" name="telefono" id="Telf" placeholder="Telefono" required>
         </div>
               
            <div class="form-group">
                  <input type="submit" value="Agregar" />
            </div>
      </form>
</div>

<br></br>
  
<div class="table-container">

<div class="table-container">
   <h2>Consulta de los proveedores</h2>
<table class="centered-table">
<thead>
  <tr>
    <th>Id proveedor</th>
    <th>Nombre del proveedor</th>
    <th>Colonia</th>
    <th>Municipio</th>
    <th>Telefono</th>
  </tr>
</thead>
<tbody>

  <?php
        // Verifica si $Consultap no es null antes de usarlo en el bucle while.
      
            while ($row = $Consultapro->fetch_object()) {
                echo '<form class="form" action="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=Consultaprovedor" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtid" value="'.$row->proveedor_id.'" readonly> </td>';
                echo '<td> <input type="text" name="txtnom" value="'.$row->nombre.'" readonly> </td>';
                echo '<td> <input type="text" name="txtap" value="'.$row->colonia.'" readonly> </td>';
                echo '<td> <input type="text" name="txtam" value="'.$row->municipio.'" readonly></td>';
                echo '<td> <input type="text" name="txtnombre" value="'.$row->telefono.'" readonly></td>';
                echo '<td width=>';
                echo '<center>';
                echo '</td>';
                echo '</tr>';
                echo '</form>';
            }
        
  ?>

 </tbody>
</table>
</div>