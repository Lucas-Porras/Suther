<?php require_once "database/database.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "partials/header.php" ?>
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
                                <button type="submit" class="form-control mt-3 border border-primary" style="--bs-border-opacity: .3;" name="registrarme">Registrarme</button>
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