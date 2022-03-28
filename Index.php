
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
	<!--Aqui lo que se hace es que el navegador no ajuste el tamaño de la pagina, para que siempre sea el 100% -->
<meta name="viewport" content="width= device-width, initial-scale=1.0">

	
	<!--Linkeamos los css-->
	<link href="cabecera.css" rel="stylesheet">
	<link href="tarjetas.css" rel="stylesheet">
	<link href="slider.css" rel="stylesheet">
	
	<!--Aqui linkeamos el bootstrap para utilizar el grid-->
	<link href="css/bootstrap.min.css" rel="alternate stylesheet" type="text/css">
	
<title>TecShop</title>
</head>

<body>
	<header class="cabecera">
		
	<div class="contenedor logo-nav-contenedor">
		<a href="Index.php" class="logo">LOGO</a>
		
		<img class="menu-icon" src="imagenes de productos/17654.png" alt="icono menu">
		
		<nav class="navegacion">
		<ul>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Instagram</a></li>
			<li><a href="iniciosesion.php">Inciar Sesion </a></li>
			<a>|</a>
			<li><a href="iniciosesion.php">Registrarse</a></li>
			</ul>
		</nav>
		</div>
		
	</header>
	<main class="main">
<!--Creamos un php el cual crea la conexion con la base de dato que ademas crea el query para recibir los datos de la tabla-->
		<?php

/*Creamos una variable para la conexion a la base de datos*/
	$conexion = mysqli_connect('localhost','root','','tecshop_registros') or die(mysql_error($mysqli));

//Creamos la variable que es el query que recibira la base de datos para traernos los prodductos que estan almacenados en la tabla
$query = "SELECT Nombre, Descripción, Precio FROM productos";

//Ejecutamos el query y lo almacenamos en la variable resultado
$resultado	=	mysqli_query($conexion, $query);

	//Creamos un bucle para que se muestren toddos los productos almacenados
	while($mostrar=mysqli_fetch_array($resultado))
	{
?>
		<!-- Aqui se muestra el listado de productos mas venidos y los que tienen descuento-->
		<div class="productos">
				<div class="card">
					<div class="img-container" >
					<img src="imagenes de productos/no-image.jpg" alt="Imagen de camisa gamer">
					</div>
				
					<div class="info-producto">
					<h3>
						<?php echo $mostrar['Nombre'] ?>
						<?php echo $mostrar['Descripción'] ?>
						</h3>
					</div>
					
					<p> 
						$<?php echo number_format($mostrar['Precio'], 2, ".", ","); ?>
						<span class="rating">★★★★★</span>
			<a href="#" class="add-cart">Añadir a carrito</a>
					</p>
				</div>
			</div>
		<?php } ?> <!--Cerramos el bucle-->
	
	</main>
	
	
	
	
	<footer>
	<script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="scripts.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-3.4.1.js"></script>
	</footer>
	
</body>
</html>
