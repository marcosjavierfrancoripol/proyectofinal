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

$sql="UPDATE tarjeta SET  numerodetar='$numerodetar',marca='$marca',cvv='$cvv',caducidad='$caducidad',direccion='$direccion',codigo_postal='$codigo_postal' WHERE titular='$titular'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tarjeta.php");
    }
?>