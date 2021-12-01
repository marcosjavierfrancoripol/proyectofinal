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

$sql="UPDATE reserva SET  tipo='$tipo',piso='$piso',nombre='$nombre',fechain='$fechain',fechasal='$fechasal',gente='$gente' WHERE id='$id'";
$query=mysqli_query($con,$sql);


    if($query){
        Header("Location: reserva.php");
    }
?>