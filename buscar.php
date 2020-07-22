
<?php
    include 'conexion.php';
    if (!isset($_POST['buscar']))
    {
        $_POST['buscar'] = "";
        $buscar = $_POST['buscar'];
    }

    $buscar = $_POST['buscar'];

    $sql_read = "SELECT * FROM notas WHERE titulo LIKE '%".$buscar."%' OR
    descripcion LIKE '%".$buscar."%' OR fecha LIKE '%".$buscar."%'";

    $sql_query = mysqli_query($conexion, $sql_read);
?>