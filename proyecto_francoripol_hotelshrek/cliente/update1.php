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

$sql="UPDATE cliente SET  nombre='$nombre',apellidop='$apellidop',apellidom='$apellidom',edad='$edad',telefono='$telefono',email='$email' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>