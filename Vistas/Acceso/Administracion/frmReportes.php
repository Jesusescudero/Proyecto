
<link rel="stylesheet" href="Estilos/Reportees.css">
<form class="form" action="/SistemaBordadoA/index.php?clase=controladorreporte&metodo=buscarcliente" method="POST">
    <h2>Reporte, para encontrar el propietario del correo</h2>
   
    <div class="form-group">
      <label for="gmail">Ingresa el correo del cliente:</label>
      <input type="text" id="correo" name="correo" required>
    </div>
       
    <div class="form-group">
      <button type="submit">Generar</button>
    </div>
  </form>