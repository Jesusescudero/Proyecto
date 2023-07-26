<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Estilos/style.css">
</head>
<body>
<br></br>

<form class="form" action="/SistemaBordadoA/index?clase=controladorlogin&metodo=Acceder" method="POST">
 
    <div class="login-container">
       <h2>LOGIN</h2>
       <center>
         <div class="img">
            <img src="img/user1.webp" alt="img" width="100" height="100">
          </div>  
          </center>
           <label for="usuario">Usuario:</label>
          <input type="text" name="txtusuario" id="usuario" placeholder="Usuario" required>
       <div class="form-group">
         <label for="password">Password:</label>
         <input type="password" name="txtpassword" id="password" placeholder="Contraseña" required>
      </div>
        <div class="form-group">
        <button class="but" type="submit" onclick="Validar()">Ingresar</button>
        </div>
    </div>
  </form>
 
</body>
</html>


