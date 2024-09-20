<?php
// Inicializa la sesión o toma la existente
session_start();

// Se verifica si existe la variable de sesión tareas
if (!isset($_SESSION['tareas'])) {
    // Si no existe, se inicializa como un array vacío
    $_SESSION['tareas'] = [];
}

// Copiamos la variable de sesión a un array local
$tareas = $_SESSION['tareas'];

// Se verifica si se ha agregado una nueva tarea
if (isset($_POST['tarea'])) {
    // Obtenemos la nueva tarea
    $nueva_tarea = $_POST['tarea'];

    // Agregamos la nueva tarea a a lista
    $tareas[] = $nueva_tarea;
}

// Colocamos la lista de tareas en la variable de sesión
$_SESSION['tareas'] = $tareas;

// Regresamos a la lista de tareas
header('Location:index.php');
