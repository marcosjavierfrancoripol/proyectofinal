<?php
include("conexion2.php");
$con=conectar();

$titular=$_POST['titular'];
$numerodetar=$_POST['numerodetar'];
$marca=$_POST['marca'];
$cvv=$_POST['cvv'];
$caducidad=$_POST['caducidad'];
$direccion=$_POST['direccion'];
$codigo_postal=$_POST['codigo_postal'];

$sql="INSERT INTO tarjeta VALUES('$titular','$numerodetar','$marca','$cvv','$caducidad','$direccion','$codigo_postal')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: tarjeta.php");
    
}else {
}
?>