<?php
include('conectar.php');
//conectarme a mysql
$id=$_GET['id'];

$opcion=$_GET['opcion'];

	if ($opcion)
	{
		$id=$_GET['id'];

   		$sqlb=mysqli_query($mysql,"delete from usuarios where id_usuario='$id'");


		header('location:index.php');
		}
	else {


	echo "<script>
 		var p;
 		p = confirm('Seguro Desea Borrar el registro?');
 		if(!p)
		{
 			location.href='index.php';
		}
		else
		{
 			location.href='borrar.php?opcion=borrar&id=$id';
		}
 		</script>";
	}
mysqli_close();
?>