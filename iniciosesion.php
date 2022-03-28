<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width= device-width, initial-scale=1.0">
	
	<link href="estilo-formulario.css" rel="stylesheet">
<title>Iniciar sesión | TecShop</title>
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

	<main class="main-usuers">
		<div class="container-users"><!--Contenedor para registro y inicio de sesion para usuarios-->
			
			<form action="BD/registrar.php" method="post" class="from-register" ><!--Creamos un form-->
			<div class="container-registro"><!--Contenedor del registro-->
			<h3>Crea tu cuenta</h3>
				<div class="userdata"><!--Contenedor de datos de usuario-->
					<div class="container-username">
						<p>Usuario</p>
					<input type="text" name="user-name">
					</div>
				<div class="container-useremail">
					<p>Correo Electronico</p>
					<input type="email" name="user-email">
					</div>
					<div class="user-pass">
					<p>Contrsaeña</p>
						<input type="password" name="user-password" id="contraseña">
						<img class="btneye" src="imagenes de productos/eye-png-icon-28.jpg" alt="ojo" id="boton">
					</div>
					<div class="user-confirmpass">
					<p>Confirmar contrsaeña</p>
						<input type="password" name="user-confirmpassword" id="contraseña2">
						<img class="btneye" src="imagenes de productos/eye-png-icon-28.jpg" alt="ojo" id="boton2">
					</div>
					<div class="btnregistro">
					<input type="submit" name="btnR">
					</div>
					
				</div><!--Fin de contenedor de datos de usuario-->
			</div><!--Fin de contenedor de registro-->
			</form>
			<div class="container-inicio">
				<h3>Inicia Sesion</h3>
			<div class="container-useremail">
					<p>Correo Electronico</p>
					<input type="email" name="user-email">
					</div>
				<div class="user-pass">
					<p>Contrsaeña</p>
						<input type="password" name="user-password" id="contraseña">
						<img class="btneye" src="imagenes de productos/eye-png-icon-28.jpg" alt="ojo" id="boton">
					</div>
				<div class="btniniciosesion">
					<input type="submit" name="btnIS">
					</div>
			</div>
			</div>
		</main>
	<footer>
	<script src=" https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="scripts.js"></script>
	</footer>
</body>
	
</html>
