<div>
<head>
<link rel="stylesheet" href="Estilos/Registrar.css">
</head>
<form class="form" action="/SistemaBordadoA/index?clase=controladorlogin&metodo=insertuser" method="POST" id="Registro">
    <h2>Registrar nuevo usuario</h2>
    
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Nombre" required maxlength="20" pattern="[A-Za-z]?+">
    </div>
    <div class="form-group">
      <label for="apaterno">Apellido Paterno:</label>
      <input type="text" id="apaterno" name="apaterno" placeholder="Apellido paterno" required maxlength="20" pattern="[A-Za-z]?+">
    </div>
    <div class="form-group">
      <label for="amaterno">Apellido Materno:</label>
      <input type="text" id="amaterno" name="amaterno" placeholder="Apellido materno" required maxlength="20" pattern="[A-Za-z]?+">
    </div>
    <div class="form-group">
      <label for="correo">Correo Electrónico:</label>
      <input type="email" id="correo" name="correo" required>
    </div>
    <div class="form-group">
      <label for="">Direccion</label>
      <input type="text" id="direccion" name="direccion" required>
    </div>
    <div class="form-group">
  <label for="">Colonia</label>
  <input type="text" id=colonia name="selecolonia" required>
</div>
<div class="form-group">
      <label for="municipio">Municipio:</label>
      <select name="selectmunicipio" id="municipio" required>
      <option value="">Selecciona el municipio</option>
      <?php while ($filas = $consulta->fetch_object()) { ?>
      <option value="<?php echo $filas->idmunicipio; ?>"><?php echo $filas->municipio; ?></option>
       <?php } ?>
</select><br><br>
</div>
    <div>
      <label for="sexo">Genero:</label>
      <select name="selecsexo" id="sexo" class="form-control">
          <option value="M">M</option>
          <option value="F">F</option>
      </select>
    </div>
    <div class="form-group">
      <label for="fechana">Fecha de Nacimiento:</label>
      <input type="date" id="fechana" name="fechana" required>
    </div>
    <div class="form-group">
      <label for="tel">Teléfono:</label>
      <input type="text" id="tel" name="tel" required maxlength="10">
    </div>
    <div class="form-group">
      <label for="usu">Usuario:</label>
      <input type="text" id="usu" name="usu" required>
    </div>
    <div class="form-group">
      <label for="pass">Password:</label>
      <input type="password" id="pass1" name="pass" required>
    </div>
    <div class="form-group">
    <label for="">Confirmar password:</label>
    <input type="password" id="pass2" required>
    </div>
    <div class="form-group">
      <select name="selectTipo" class="form-control">
          <option value="Normal">Normal</option>
      </select>
    </div>
    <button type="submit" onclick="Validar()">Registrar</button>
</form>
</div>
