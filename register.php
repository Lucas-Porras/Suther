<?php 

require_once "database/database.php";

$error = "";

session_start();
if(isset($_SESSION['usuario'])){
    echo"<script> alert('Ya estas logueado!'); </script>";
    header('Location: index.php');
} // Lo creamos en caso de que ya este logueado y haya entrado de alguna manera al register.



if(isset($_POST['registrarme']) > 0){
    if(strlen($_POST['name']) > 1 && strlen($_POST['surname']) > 1 && strlen($_POST['username']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['password']) > 1){
        $consultaRegistro = "INSERT INTO users (name, surname, email, username, password) values ('".$_POST['name']."','".$_POST['surname']."','".$_POST['username']."','".$_POST['email']."','".$_POST['password']."')";
        $queryRegistro = mysqli_query($conexion, $consultaRegistro);
    }
    else{
        echo "<script>alert('Complete todos los campos');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "partials/header.php"; ?>
<body>
    <div>
        <div class="container mt-5">
            <div class="principal rounded-2 p-4 align-items-center">
                <div>
                    <H1 class="fw-semibold">Registrate</H1>
                </div>    
                <div class="rounded-2 shadow-lg mt-3" style="background-color: #b8b8ff;">
                    <form class="" action="register.php" method="POST">
                        <div class="p-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="fw-semibold form-label">Nombre</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-sm-6">
                                    <label class="fw-semibold form-label">Apellido</label>
                                    <input type="text" class="form-control" name="surname">
                                </div>
                            </div>
                            <div class="">
                                <label class="fw-semibold form-label mt-1">Usuario</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="">
                                <label class="fw-semibold form-label mt-1">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="">
                                <label class="fw-semibold form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="">
                                <label class="fw-semibold form-label">Confirmar contraseña</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <hr style="w-50% text-center">
                            <div class="">
                                <input type="submit" class="form-control mt-3 border border-primary" value="Registrarme!" style="--bs-border-opacity: .3;" name="registrarme"></input>
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