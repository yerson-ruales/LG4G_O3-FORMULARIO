
<?php
//datos de conexion bsd
$host= "localhost";
$user = "root";
$password="";
$db="personas";
//craer la conexion 
$con = new mysqli($host,$user,$password,$db);

//prueva conexion
if($con->connect_error){
    echo"base de datos no disponible";
}else{
    echo "conectados ala base de datos";
}
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];

$query =  "insert into persona(nombre,apellido,email)
values('$nombre','$apellido','$email')";










if($con->query($query)){
echo "persona guaradda correctamente";
}else{
echo "nos se a guradado la consulta". $con->error;
}

$con->close();

header('location: crear.php')

//echo"la  informaion enviada es : Nombre $nombre Email:$email";
?>