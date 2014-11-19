<?php 
//Proceso de conexión con la base de datos
$conex = mysql_connect("localhost", "root", "")
		or die("No se pudo realizar la conexion");
	mysql_select_db("regalos",$conex)
		or die("ERROR con la base de datos");

//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$user= $_POST['user'];
$password= $_POST['password'];

//Consultar si los datos son están guardados en la base de datos
$consulta= "SELECT * FROM login WHERE user='".$user."' AND password='".$password."'"; 
$resultado= mysql_query($consulta,$conex) or die (mysql_error());
$fila=mysql_fetch_array($resultado);


if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "index.php"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['id'] = $fila['id'];
	$_SESSION['user'] = $fila['user'];

	header("Location: pagina_usuario.php");
}
?>