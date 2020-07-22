<?php include("conexion.php") ?>

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
                    <form action="signin.php" method="post">
                        <div class="form-group">
                            <h1 class="text-center"> Sign In</h1><pre>
                            <input type="text" name="user" class="form-control" placeholder="Usuario" autofocus><pre>
                            <input type="password" name="pass" class="form-control" placeholder="Clave" autofocus>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="btn_ingresar" value="Ingresar"><pre></pre>
                        <a href='signup.php'>Registrarse</a>
                    </form>
                </div>
            </div>
        </div>
    </div> 

<?php include("includes/footer.php") ?>