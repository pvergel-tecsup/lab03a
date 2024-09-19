<?php
session_start();

$tareas = [];

if (!isset($_SESSION['tareas']))
{
    $_SESSION['tareas'] = [];
}

$tareas = $_SESSION['tareas'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container">
        <h1>Mis Tareas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Tarea</th>
                </tr>
            </thead>
            <tbody>
            <?php
            for ($i = 0; $i < count($tareas); $i++) 
            {
                echo '<tr><td>' . $tareas[$i] . '</td></tr>';
            }
            ?>
            </tbody>
        </table>
        <a href="agregar.php" class="btn btn-primary">Agregar Tarea</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>