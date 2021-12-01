<?php 
    include("conexion2.php");
    $con=conectar();

    $sql="SELECT *  FROM tarjeta";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> hotel shrek</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>registro de tarjeta</h1>
                                <form action="insertar2.php" method="POST">

                                <input type="text" class="form-control mb-3"  name="titular" placeholder="titular de la tarjeta">
                                <input type="text" class="form-control mb-3"  name="numerodetar" placeholder="numero de la tarjeta">
    	                        <input type="text" class="form-control mb-3"  name="marca" placeholder="marca nacional">
		                        <input type="text" class="form-control mb-3"  name="cvv" placeholder="cvv">
                                <input type="date" class="form-control mb-3"  name="caducidad" placeholder="caducidad de la tarjeta">
    	                        <input type="text" class="form-control mb-3"  name="direccion" placeholder="direccion">
		                        <input type="text" class="form-control mb-3"  name="codigo_postal" placeholder="codigo postal">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_francoripol_hotelshrek/index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>titular</th>
                                    <th>numerodetar</th>
                                    <th>marca</th>
                                    <th>cvv</th>
                                    <th>caducidad</th> 
                                    <th>direccion</th>
                                    <th>codigo_postal</th>   
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['titular']?></th>
                                                <th><?php  echo $row['numerodetar']?></th>
                                                <th><?php  echo $row['marca']?></th>
                                                <th><?php  echo $row['cvv']?></th>
                                                <th><?php  echo $row['caducidad']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['codigo_postal']?></th>   
                                                <th><a href="actualizar2.php?titular=<?php echo $row['titular'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete2.php?titular=<?php echo $row['titular'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>