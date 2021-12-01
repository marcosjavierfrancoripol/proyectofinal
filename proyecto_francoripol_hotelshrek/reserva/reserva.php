<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM reserva";
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
                            <h1>reserva de habitacion</h1>
                                <form action="insertar3.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo de habitacion">
                                    <input type="text" class="form-control mb-3" name="piso" placeholder="piso">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre del titular">
                                    <input type="date" class="form-control mb-3" name="fechain" placeholder="fecha de ingreso">
                                    <input type="date" class="form-control mb-3" name="fechasal" placeholder="fechasal">
                                    <input type="text" class="form-control mb-3" name="gente" placeholder="acompañantes">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_francoripol_hotelshrek/index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>tipo</th>
                                        <th>piso</th>
                                        <th>nombre</th>
                                        <th>fechain</th>
                                        <th>fechasal</th>
                                        <th>acompañantes</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['tipo']?></th>
                                                <th><?php  echo $row['piso']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['fechain']?></th>   
                                                <th><?php  echo $row['fechasal']?></th>
                                                <th><?php  echo $row['gente']?></th>   
                                                <th><a href="actualizar3.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete3.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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