<?php 

$mysqli = new mysqli("localhost", "root", "", "clase");

 
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
	/**INSERTAR AQUÍ**/
	$email = $_POST['email'];
	$password = $_POST['password'];
	$year = $_POST['year'];

	$resultado = $mysqli->query("INSERT INTO alumno(correo,contrasenia,anioNacimiento) VALUES('".$email."','".$password."',".$year.")");

	echo ($mysqli->affected_rows > 0)? "1" : "-1";
}

$mysqli->close();

?>