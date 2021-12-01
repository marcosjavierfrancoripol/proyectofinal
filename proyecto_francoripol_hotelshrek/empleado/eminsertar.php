<?php
include("emconexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$sql="INSERT INTO empleado VALUES('$id','$nombre','$apellidos','$edad','$sexo','$telefono','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>