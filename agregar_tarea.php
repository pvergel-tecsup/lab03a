<?php
session_start();

if (!isset($_SESSION['tareas']))
{
    $_SESSION['tareas'] = [];
}

$tareas = $_SESSION['tareas'];

$nueva_tarea = $_POST['tarea'];

$tareas[] = $nueva_tarea;

$_SESSION['tareas'] = $tareas;

header('Location:index.php');
?>