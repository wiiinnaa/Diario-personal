<?php
    include("conexion.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "DELETE FROM notas WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed");
        }

        $_SESSION['message'] = 'Nota Borrada';
        $_SESSION['message_type'] = 'danger';
        header("Location: notas.php");
    }
?>