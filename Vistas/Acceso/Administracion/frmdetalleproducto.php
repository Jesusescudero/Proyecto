<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetallePrendas</title>
</head>
<body>
<form class="form" action="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=insertarResponsable" method="POST">

<h2>Responsable</h2> 

   <div>
   <label for="apellidopa">Nombre de la Prenda:</label>
      <input type="text" name="txtprenda" id="prenda" placeholder="Prenda" required>
   </div>  
   
   <div>
   <label for="apellidoma">Talla:</label>
      <input type="text" name="txttalla" id="talla" placeholder="Talla" required>
   </div>
   <div>
    <label for="nombre">Precio:</label>
      <input type="text" name="txtprecio" id="precio" placeholder="Precio" required>
</div>
<div>
    <label for="nombre">Existencia:</label>
      <input type="text" name="txtexistencia" id="existencia" placeholder="Existencia" required>
</div>
   <div class="form-group">
        <input type="submit" value="Agregar" />
  </div>
</form>
</body>
</html>