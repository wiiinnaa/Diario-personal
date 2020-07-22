<?php include("conexion.php") ?>
<?php 

    if(isset($_POST['user']) && isset($_POST['pass']))
    {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);

        $query = "INSERT INTO users VALUES(NULL,'$user', '$pass')";
        $result = $conexion->query($query);

        if (!$result)
        {
            die ("Falló registro");
        }
        /*echo "Registro exitoso <a href='signin.php'>Ingresar</a>";*/
        $_SESSION['message'] = 'Registro exitoso';
        $_SESSION['message_type'] = 'warning';
        
    }
    else
    {
        /*include("includes/header.php");

        echo <<<_END
        <h1>Regístrate</h1>
        <form action="signup.php" method="post"><pre>
        Usuario  <input type="text" name="user">
        Password <input type="text" name="pass">
                 <input type="hidden" name="reg" value="yes">
                 <input type="submit" value="REGISTRAR">
        </form>
        _END;
        include('includes/footer.php');*/
    }
?>
<?php include("includes/header.php") ?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php session_unset();} ?>
                
                <div class="card card-body"> 
                    <form action="signup.php" method="post">
                        <div class="form-group">
                            <h1 class="text-center"> Sign Up</h1><pre>
                            <input type="text" name="user" class="form-control" placeholder="Usuario" autofocus><pre>
                            <input type="password" name="pass" class="form-control" placeholder="Clave" autofocus>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="btn_ingresar" value="Registrar"><pre></pre>
                        <a href='signin.php'>Ingresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div> 

<?php include("includes/footer.php") ?>
