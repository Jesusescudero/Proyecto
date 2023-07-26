<head>
<link rel="stylesheet" href="Estilos/Catalogo.css">
</head>
<div >
<?php
              while ($fila= $catalogo->fetch_assoc()) {
              echo '<form class="form" action="/SistemaBordadoA/index?clase=controladorprenda&metodo=Catalogoropa" method="POST">';
              ?>
              <div >
              <img src="data:image/jpeg;base64, <?php echo base64_encode($fila['Imagen']); ?>" >
              <br>
              <h4><?php echo $fila['nombre']; ?></h4>
              <br>
              <h5>Descripcion: <?php echo $fila['descripcion']; ?></h5>
              <br>
              <br>
              <h5>Tipo de ropa: <?php echo $fila['tipo']; ?></h5>
              <br>
              <h5>Precio: <?php echo $fila['precio']; ?> pesos </h5>
              <br>
              <br>
              <h5>Cantidad: <?php echo $fila['stock']; ?> pesos </h5>
              <br><br>
              </div>
              <div class="form-group">
             <input type="submit" value="Comprar"/>
             </div>
              <?php
              echo '</form>';
              }
?>
</div>