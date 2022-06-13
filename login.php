<?php 

require_once "database/database.php";

session_start();

if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

if(isset($_POST['loguearme'])){
    $usuario = $_POST['email'];
    $contra = $_POST['password'];
    if(strlen($usuario) > 1 && strlen($contra) > 1){
        $consultaLogin = "SELECT * FROM users WHERE email = '$usuario' OR username = '$usuario' AND password = '$contra'";
        $queryLogin = mysqli_query($conexion, $consultaLogin);
        if(1 == mysqli_num_rows($queryLogin)){
            $row = mysqli_fetch_assoc($queryLogin);
            $_SESSION['usuario'] = $row['username'];
            echo "<script>alert('Logueado con exito')</script>";
        }
        else{
            echo "<script>alert('Ha ocurrido un error');</script>";
        }
    }
    else{
        echo "<script>alert('Complete todos los campos');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "partials/header.php" ?>
<body>
    <div>
        <div class="container mt-5">
            <div class="principal rounded-2 p-4 align-items-center">
                <div>
                    <H1 class="fw-semibold">Logueate</H1>
                </div>    
                <div class="rounded-2 shadow-lg mt-3" style="background-color: #b8b8ff;">
                    <form class="" action="login.php" method="POST">
                        <div class="p-2">
                            <div class="">
                                <label class="fw-semibold form-label mt-1">Email O Usuario</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="">
                                <label class="fw-semibold form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <hr style="w-50% text-center">
                            <div class="">
                                <input type="submit" class="form-control mt-3 border border-primary" value="Loguearme" style="--bs-border-opacity: .3;" name="loguearme"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php include_once "partials/footer.php" ?>
        </div>
    </div>
</body>
</html>