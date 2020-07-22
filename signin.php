<?php 
    include("conexion.php");

    if(isset($_POST['user']) && isset($_POST['pass']))
    {
        $user = mysql_fix_string($conexion, $_POST['user']);
        $pass = md5($_POST['pass']);

        $query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

        $result = $conexion->query($query);
        if ($result->num_rows >= 1)
            header("Location: notas.php");    
        else
        {
            //echo "Usuario o password incorrecto <a href='signup.php'>Registrarse?</a>"; 
            //echo "<br><a href='signin.php'>Ingresar</a>";

            $_SESSION['message'] = 'fallo inicio de sesion Registrese';
            $_SESSION['message_type'] = 'warning';
            header("Location: signin.php");
        }
    }
    else
    {
        header("Location: index.php");
    }
    function mysql_fix_string($coneccion, $string)
    {
        if (get_magic_quotes_gpc())
            $string = stripcslashes($string);
        return $coneccion->real_escape_string($string);
    }
?>
