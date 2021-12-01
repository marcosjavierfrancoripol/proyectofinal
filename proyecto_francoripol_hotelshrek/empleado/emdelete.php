<?php

include("emconexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM empleado  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>
