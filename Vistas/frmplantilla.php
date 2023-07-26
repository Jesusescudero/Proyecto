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
                <li><a href="/SistemaBordadoA/index?clase=controladorprincipal&metodo=inicio">Inicio</a></li>
                <li><a href="/SistemaBordadoA/index?clase=controladorprenda&metodo=Catalogoropa">Catalogo</a></li>
                <li><a href="/SistemaBordadoA/index?clase=controladorlogin&metodo=inicio">Login</a></li>
                <li><a href="/SistemaBordadoA/index?clase=controladorlogin&metodo=insertuser">Registrarse</a></li>
                <li><a href="/SistemaBordadoA/index?clase=controladorlogin&metodo=acercadeinicio">Acerca de</a></li>
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



