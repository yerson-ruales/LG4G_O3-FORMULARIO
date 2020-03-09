hola desde index
<?php 

	$conexion=mysqli_connect('localhost','root','','personas');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>email</td>
			
		</tr>

		<?php 
		$sql="SELECT * from persona";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>