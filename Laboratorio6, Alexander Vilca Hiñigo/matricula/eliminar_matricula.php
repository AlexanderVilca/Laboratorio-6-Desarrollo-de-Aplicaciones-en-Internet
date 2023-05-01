<?php

include('../conexion.php');

//Obtenemos la informacion del curso

$matricula_id = $_POST['matricula_id'];

//Abrimos la conexion a la base de datos

$conexion = conectar();

//Formamos la consulta sql

$sql = "DELETE FROM matricula WHERE matricula_id = '$matricula_id'";

//Ejecutamos la instruccion SQL

$resultado = mysqli_query($conexion, $sql);

//Cerramos la conexion

desconectar($conexion);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Matricula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color: blanchedalmond;">
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center bg-info text-dark">
                <h3><div>Matricula Eliminada</div></h3>
            </div>
            <div class="card-body text-center">
            <h3>
                <?php

                    if(!$resultado){
                        echo 'La Matricula no pudo ser eliminada';
                    } else {
                        echo 'La Matricula fue eliminada exitosamente';
                    }
                ?>
            </h3>
            <a href="matriculas.php"><button type="button" class="btn btn-primary"> Regresar </button></a>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>