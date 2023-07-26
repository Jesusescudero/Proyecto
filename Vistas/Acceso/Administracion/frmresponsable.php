<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsable</title>
  <link rel="stylesheet" href="Estilos/Responsable1.css">
</head>
<body>
<form class="form" action="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=insertarResponsable" method="POST">

<h2> Registrar los encargados de enviar la prenda</h2> 
   <div>
   <label for="apellidopa">Apellido Paterno:</label>
      <input type="text" name="txtap" id="aparterno" placeholder="Apellido Paterno" required>
   </div>  
   
   <div>
   <label for="apellidoma">Apellido Materno:</label>
      <input type="text" name="txtam" id="apaterno" placeholder="Apellido Paterno" required>
   </div>
   <div>
    <label for="nombre">Nombre:</label>
      <input type="text" name="txtnombre" id="apaterno" placeholder="Nombre" required>
</div>
      
   <div class="form-group">
        <input type="submit" value="Agregar" />
  </div>
</form>


<br></br>
    <div class="table-container">
<table class="centered-table">
<thead>
  <tr>
    <th>Id Responsable</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Nombre</th>
    <th>Acciones</th>
  </tr>
</thead>
<tbody>

  <?php
        while ($alum= $Consulta->fetch_object()) {
          echo '<form class="form" action="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=ActualizarXEliminar" method="POST">';
            echo '<tr>';
            echo '<td> <input type="text" name="txtid" value="'.$alum->idresponsable.'" readonly> </td>';
            echo '<td> <input type="text" name="txtap" value="'.$alum->apaterno.'" > </td>';
            echo '<td> <input type="text" name="txtam" value="'.$alum->amaterno.'" ></td>';
            echo '<td> <input type="text" name="txtnombre" value="'.$alum->nombre.'" ></td>';
            echo '<td width=250>';
            echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button" >Actualizar</button>';
            echo '&nbsp;';
            echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button">Eliminar</button>';
            echo '</td>';
            echo '</tr>';
            
            echo '</form>';
        }
  
  ?>

 </tbody>
</table>
</div>


</body>
</html>

