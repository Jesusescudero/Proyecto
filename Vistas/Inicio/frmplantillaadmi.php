<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<link rel="stylesheet" href="Estilos/style.css">

</head>
<body>
<header class="header">
        <h1>Bordado Encantador</h1>
        <nav class="navbar">
            <ul>
                <li><a class="nav-button" href="/SistemaBordadoA/index?clase=controladorprincipal&metodo=inicioadmi">Inicio</a></li>
                <li><a class="nav-button" href="/SistemaBordadoA/index?clase=controladorprenda&metodo=Catalogoadmi">Catalogo</a></li>
                <li><a class="nav-button" href="/SistemaBordadoA/index?clase=controladorlogin&metodo=insertempleados">Registrar Usuario</a></li>
                <li class="has-submenu">
                    <a class="nav-button" href="#">Agregar</a>
                    
                    <ul class="submenu">
                            <li><a class="nav-button" href="/SistemaBordadoA/index?clase=controladorprenda&metodo=agregarprenda">Prendas</a></li>
                            <li><a class="nav-button" href="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=insertarProveedor">Proveedor</a></li>
                            <li><a class="nav-button" href="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=insertarResponsable">Responsable</a></li>
                            <li><a class="nav-button" href="/SistemaBordadoA/index.php?clase=controladorreporte&metodo=buscarcliente">cliente del correo</a></li>
                           
                </ul>  
                </li>
                <li class="has-submenu"> 
                <a class="nav-button" href="#">Consultas</a>      
                <ul class="submenu">
                 <li><a class="nav-button" href="/SistemaBordadoA/index?clase=controladorprenda&metodo=administrarPrenda">Prendas</a></li>
                 <li><a class="nav-button" href="/SistemaBordadoA/index.php?clase=controladorresponsable&metodo=Consultausuarios">clientes</a></li>
                 </ul>
                 </li>
                 <li><a class="nav-button" href="/SistemaBordadoA/index?clase=controladorlogin&metodo=inicio2">iniciar sesion</a></li>
                 <li><a class="nav-button" href="/SistemaBordadoA/index?clase=controladorlogin&metodo=cerrarsesion">Cerrar sesion</a></li>
            </ul>
    </header>
    <section class="container">
        <!-- aqui vamos a llamar a los elementos que vamos a mostrar posteriormente-->
        <?php include_once($vista); ?>
    </section>
    <footer class="footer">
        <h3> &copy;Derechos reservados</h3>
    </footer>

</html>

