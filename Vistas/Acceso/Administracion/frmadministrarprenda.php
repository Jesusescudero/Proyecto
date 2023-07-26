<link rel="stylesheet" href="Estilos/InsertarPrendas.css">
<h2>Administración de las prendas</h2>
<div class="centro2">
  <table border="1">
    <thead>
      <tr>
      <th>Codigo</th>
        <th>Nombre de la prenda</th>
        <th>Descripcion</th>
        <th>Tipo de ropa</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Imagen</th>
        <th>Accion</th>
      </tr>
    </thead>
    <tbody>
      <?php
            while ($ropa= $catalogo->fetch_object()) {
              $imagenD=$ropa->Imagen;
              $imagenSrc= 'data:image/*;base64,' . base64_encode($imagenD);
                echo '<form class="form" action="/SistemaBordadoA/index?clase=controladorprenda&metodo=administrarPrenda" method="POST" enctype="multipart/form-data" id="Registrar" "> ';
                echo '<tr>';
                echo '<td> <input type="text" name="idprenda" value="'.$ropa->prendas_id.'" readonly style="width: 80px;"></td>';
                echo '<td> <input type="text" name="nombre" value="'.$ropa->nombre.'" style="width: 80px;"></td>';
                echo '<td> <input type="text" name="descripcion" value="'.$ropa->descripcion.'" style="width: 120px;"></td>';
                echo '<td> <input type="text" name="tip" value="'.$ropa->tipo.'" readonly style="width: 120px;"></td>';
                echo '<td> <input type="text" name="precio" value="'.$ropa->precio.'" style="width: 80px;"></td>';
                echo '<td> <input type="text" name="cantidad" value="'.$ropa->stock.'" style="width: 80px;"></td>';
                echo '<td width=350>';
                echo '<center>';
                echo '<img src=" '.$imagenSrc.' " alt="Imagen" style="width: 70px; height: 50px; margin-top: 3%;" >  <button type="submit" name="btnGuardar" value="btnGuardar" id="image5" class="submit-button"  >Actualizar Imagen</button>';
                echo '<br><br>';
                echo '&nbsp;';
                echo '<input type="file" name="txtimagen" id="imagen" accept="image/*" >';
                echo '</center>';
                echo '</td>';
                echo '<td width=350>';
                echo '<center>';
                echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button"  >Actualizar</button>';
                echo '&nbsp;';
                echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button" >Eliminar</button>';
                echo '</center>';
                echo '</td>';
                echo '</tr>';
                echo '</form>';
            }
      
      ?>
    
    </tbody>
  </table>
  
  </div>