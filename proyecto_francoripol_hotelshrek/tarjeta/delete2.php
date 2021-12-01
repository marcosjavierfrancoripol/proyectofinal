<?php

include("conexion2.php");
$con=conectar();

$titular=$_GET['titular'];

$sql="DELETE FROM tarjeta  WHERE titular='$titular'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tarjeta.php");
    }
?>
