<?php
include("conexion1.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$sql="INSERT INTO cliente VALUES('$id','$nombre','$apellidop','$apellidom','$edad','$telefono','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>