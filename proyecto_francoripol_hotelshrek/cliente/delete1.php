<?php

include("conexion1.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM cliente  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
