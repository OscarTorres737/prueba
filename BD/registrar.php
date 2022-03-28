
<?php

/*Creamos una variable para la conexion a la base de datos*/
	$conexion = mysqli_connect('localhost','root','','tecshop_registros') or die(mysql_error($mysqli));



/*Llamamos a la funcion para insertar los datos*/
insertar($conexion);

/*Creamos una funcion que insertara los datos a la tabla*/
function insertar($conexion){

/*Obtenemos los valores del formulario*/
$usuario = $_POST['user-name'];
$email = $_POST['user-email'];
$pass = $_POST['user-password'];
$confirmpass = $_POST['user-confirmpassword'];
$fechareg = date("y/m/d");
/*Encriptamos la contraseña*/
$pass = hash('sha512', $pass);

	
/*Se verifica que el correo electronico no este ya registrado en la base de datos*/

$verificar_correo =	mysqli_query($conexion, "SELECT * FROM datos_usuarios WHERE Email_Usuario = '$email'");

if(mysqli_num_rows($verificar_correo) > 0){
	echo ('<script>
		alert("Este correo ya esta registrado, introduze otro");
		window.location = "../iniciosesion.html";
		</script>');	
	exit();
}
	
/*Se verifica que el usuario no este ya registrado en la base de datos*/
$verificar_user	=	mysqli_query($conexion, "SELECT * FROM datos_usuarios WHERE	Nombre_Usuario = '$usuario'	");	
	if(mysqli_num_rows($verificar_user)>0){
		echo('<script>
		alert("Este nombre de usuario ya existe, intenta con otro");
		window.location = "../iniciosesion.html";
		</script>');
		exit();
	}
/*Se confirma la contraseña*/
if($confirmpass != $pass){
	
	echo('<script>
		alert("Las contraseñas no coinciden, introduce ambas nuevamente");
		window.location = "../iniciosesion.html";
		</script>');
	exit();
}
	
/*Insertamos los datos a la tabla*/
$consulta = "INSERT INTO datos_usuarios (Nombre_Usuario, Email_Usuario, Password_Usuario, fech_Registro) VALUES ('$usuario','$email','$pass', '$fechareg')";
	
	 mysqli_query($conexion, $consulta);
}









?>
