<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$tipo=$_POST['tipo'];
$piso=$_POST['piso'];
$nombre=$_POST['nombre'];
$fechain=$_POST['fechain'];
$fechasal=$_POST['fechasal'];
$gente=$_POST['gente'];

$sql="INSERT INTO reserva VALUES('$id','$tipo','$piso','$nombre','$fechain','$fechasal','$gente')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: reserva.php");
    
}else {
}
?>