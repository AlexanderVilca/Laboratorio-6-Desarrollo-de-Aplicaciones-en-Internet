<?php

include('../conexion.php');

//Abrimos la conexion a la BD MySql

$connexion = conectar();

//Definimos la consulta Sql

$sql = 'SELECT * FROM alumno';

//Ejecutamos el Query en la conexion abierta

$resultado = mysqli_query($connexion,$sql);

//Cerramos la conexion

desconectar($connexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color: blanchedalmond;">
    <div class="container">
        <div class="card mt-5 text-center">
            <div class="card-header bg-info text-dark">
                <h3><div>Alumnos</div></h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($alumno = mysqli_fetch_array($resultado)){
                            $alumno_id = $alumno['alumno_id'];
                            $nombres = $alumno['nombres'];
                            $ape_paterno = $alumno['ape_paterno'];
                            $ape_materno = $alumno['ape_materno'];

                            echo '<tr>';
                            echo '<td>'.$alumno_id.'</td>';
                            echo '<td>'.$nombres.'</td>';
                            echo '<td>'.$ape_paterno.'</td>';
                            echo '<td>'.$ape_materno.'</td>';
                        }
                        ?>
                    </tbody>
                </table>
                <a href="agregar.html"><button type="button" class="btn btn-info">Agregar Alumno</button></a>
                <a href="eliminar_alumno.html"><button type="button" class="btn btn-info">Eliminar Alumno</button></a>
                <a href="actualizar_alumno.html"><button type="button" class="btn btn-info">Actualizar Alumno</button></a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

