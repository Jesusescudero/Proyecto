<link rel="stylesheet" href="Estilos/UsuarioConsulta.css">
<div class="table-container">

<div class="table-container">
   <h2>Consulta de los clientes</h2>
<table class="centered-table">
<thead>
  <tr>
    <th>Id cliente</th>
    <th>Nombre</th>
    <th>Apellido paterno</th>
    <th>Apellido Materno</th>
    <th>Correo</th>
    <th>Direccion</th>
    <th>Sexo</th>
    <th>Fecha de nacimiento</th>
    <th>Telefono</th>
  </tr>
</thead>
<tbody>

  <?php
        // Verifica si $Consultap no es null antes de usarlo en el bucle while.
      
            while ($row = $Consultaclient->fetch_object()) {
                echo '<form class="form" action="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=Consultausuarios" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtid" value="'.$row->usuario_id.'" readonly> </td>';
                echo '<td> <input type="text" name="txtnom" value="'.$row->nombre.'" readonly> </td>';
                echo '<td> <input type="text" name="txtap" value="'.$row->apaterno.'" readonly> </td>';
                echo '<td> <input type="text" name="txtamm" value="'.$row->amaterno.'"readonly > </td>';
                echo '<td> <input type="gmail" name="txtgmail" value="'.$row->email.'" readonly></td>';
                echo '<td> <input type="text" name="txtdirec" value="'.$row->direccion.'" readonly></td>';
                echo '<td> <input type="text" name="txtsex" value="'.$row->Sexo.'" readonly></td>';
                echo '<td> <input type="text" name="txtsex" value="'.$row->fechanacimiento.'"readonly ></td>';
                echo '<td> <input type="text" name="txtsex" value="'.$row->telefono.'" readonly></td>';
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