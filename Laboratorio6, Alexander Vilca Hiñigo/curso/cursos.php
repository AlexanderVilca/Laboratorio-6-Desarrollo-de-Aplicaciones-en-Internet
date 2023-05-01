<?php

include('../conexion.php');

//Abrimos la conexion a la BD MySql

$connexion = conectar();

//Definimos la consulta Sql

$sql = 'SELECT curso_id, nombre_curso, creditos FROM curso';

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
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color: blanchedalmond;">
    <div class="container">
        <div class="card mt-5 text-center">
            <div class="card-header bg-info text-dark">
                <h3><div>Cursos</div></h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre del Curso</th>
                            <th>Creditos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($curso = mysqli_fetch_array($resultado)){
                            $curso_id = $curso['curso_id'];
                            $nombre_curso = $curso['nombre_curso'];
                            $creditos = $curso['creditos'];

                            echo '<tr>';
                            echo '<td>'.$curso_id.'</td>';
                            echo '<td>'.$nombre_curso.'</td>';
                            echo '<td>'.$creditos.'</td>';
                        }
                        ?>
                    </tbody>
                </table>
                <a href="agregarcurso.html"><button type="button" class="btn btn-info">Agregar Curso</button></a>
                <a href="eliminarcurso.html"><button type="button" class="btn btn-info">Eliminar Curso</button></a>
                <a href="actualizarcurso.html"><button type="button" class="btn btn-info">Actualizar Curso</button></a>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>