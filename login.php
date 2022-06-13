<?php require_once "database/database.php" ?>
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
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="">
                                <label class="fw-semibold form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <hr style="w-50% text-center">
                            <div class="">
                                <button type="submit" class="form-control mt-3 border border-primary" style="--bs-border-opacity: .3;" name="registrarme">Loguearme</button>
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