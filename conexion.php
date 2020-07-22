<?php
    session_start();
    $conexion = mysqli_connect('localhost', 'alumno', '123456', 'diariodb');

    /* TEST DE CONEXION A BD
    if (isset($conexion))
    {
        echo 'BD conectado';
    }
    */
?>