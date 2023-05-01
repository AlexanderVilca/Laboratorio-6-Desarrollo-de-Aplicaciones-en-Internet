<?php

include('../conexion.php');

//Abrimos la conexion a la BD MySql

$connexion = conectar();

//Definimos la consulta Sql

$sql = 'SELECT matricula_id, curso_id, alumno_id FROM matricula';

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
    <title>Matriculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color: blanchedalmond;">
    <div class="container">
        <div class="card mt-5 text-center">
            <div class="card-header bg-info text-dark">
                <h3><div>Matriculas</div></h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Matricula</th>
                            <th>Id Curso</th>
                            <th>Id Alumno</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($matricula = mysqli_fetch_array($resultado)){
                            $matricula_id = $matricula['matricula_id'];
                            $curso_id = $matricula['curso_id'];
                            $alumno_id = $matricula['alumno_id'];

                            echo '<tr>';
                            echo '<td>'.$matricula_id.'</td>';
                            echo '<td>'.$curso_id.'</td>';
                            echo '<td>'.$alumno_id.'</td>';
                        }
                        ?>
                    </tbody>
                </table>
                <a href="agregarmatricula.html"><button type="button" class="btn btn-info">Agregar Matricula</button></a>
                <a href="eliminarmatricula.html"><button type="button" class="btn btn-info">Eliminar Matricula</button></a>
                <a href="actualizarmatricula.html"><button type="button" class="btn btn-info">Actualizar Matricula</button></a>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>