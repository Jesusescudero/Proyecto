  
<link rel="stylesheet" href="Estilos/AgregarPrenda.css">
<div>
 <form class="form" action="/SistemaBordadoA/index?clase=controladorprenda&metodo=agregarprenda" method="POST" enctype="multipart/form-data">
   <h2>Ingresar prenda</h2>
    <div>
      <label for="Nombre">Nombre de la prenda</label>
      <input type="text" name="nombre" id="nombre" required>
    </div>
   <div>
      <label for="Descripcion">Descripcion</label>
      <input type="text" name="descripcion" id="descripcion" required>
   </div>
   <div>
      <label for="Tipo">Tipo de prenda</label>
      <input type="text" name="tip" id="tip" required>
   </div>
   <div>
      <label for="Precio">Precio de la prenda</label>
      <input type="text" name="precio" id="precio" required>
   </div>
   <div>
      <label for="Cantidad">Cantidad de prendas</label>
      <input type="text" name="cantidad" id="cantidad" required>
   </div>
   <div>
      <label for="Imagen">Imagen de la prenda</label>
      <input type="file" name="imagen" id="imagen" accept="image/*" required><br><br>
   </div>
        <div class="form-group">
            <input type="submit" value="Agregar"/>
        </div>
</form>
</div>