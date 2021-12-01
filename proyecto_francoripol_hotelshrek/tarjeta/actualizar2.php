<?php 
    include("conexion2.php");
    $con=conectar();

$titular=$_GET['titular'];

$sql="SELECT * FROM tarjeta WHERE titular='$titular'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update2.php" method="POST">
                    
                                <input type="hidden" name="titular" value="<?php echo $row['titular']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="numerodetar" placeholder="numerodetar" value="<?php echo $row['numerodetar']  ?>">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="marca" value="<?php echo $row['marca']  ?>">
                                <input type="text" class="form-control mb-3" name="cvv" placeholder="cvv" value="<?php echo $row['cvv']  ?>">
                                <input type="date" class="form-control mb-3" name="caducidad" placeholder="caducidad" value="<?php echo $row['caducidad']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="codigo_postal" placeholder="codigopostal" value="<?php echo $row['codigo_postal']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>