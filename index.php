<?php
  require_once "database/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuter</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg shadow-sm">
            <div class="container-fluid">
              <a class="navbar-brand fw-semibold" href="#">Suther</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                  </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Iniciar</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex" role="search">
                  <input class="fondoPlaceH form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success" type="submit"><ion-icon name="search-outline"></ion-icon></button>
                </form>
              </div>
            </div>
        </nav>
        <div class="container mt-4">
          <div class="texto-inicial p-3 rounded-2 text-center">
              <h1>Bienvenid@ A Suther</h1>
              <p class="fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi ex commodi totam accusantium sed harum tempora modi sunt, illo obcaecati iste voluptate odit? Excepturi quia, quas minima distinctio possimus dolor.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. A fuga aut quibusdam necessitatibus minus ducimus dolores, explicabo mollitia quam aperiam soluta at eum facilis libero non ipsa adipisci sunt hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatem iste repellat corporis vel, rem perspiciatis! Quos enim cum perspiciatis minus reprehenderit earum facere! Ipsum laudantium nam illum suscipit temporibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, quia quo. Nostrum repellendus dignissimos repudiandae obcaecati. Sequi velit sapiente exercitationem deserunt, tempore tenetur numquam aut quia accusantium, autem maxime consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis corporis maiores itaque voluptatibus repellat quae doloribus nesciunt, non minus ab beatae a eligendi assumenda officiis nulla at recusandae id esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tempora exercitationem natus ullam illum quidem quisquam praesentium quae assumenda delectus? Debitis voluptas dolores possimus blanditiis, corporis aliquam ipsam perspiciatis hic. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolore perferendis officiis iusto illo ducimus, mollitia molestias saepe nisi nesciunt in magni ab? Quod, eligendi! Tempore illum aspernatur officiis nesciunt.</p>
          </div>
          <footer class="text-center rounded-2 text-lg-start">
            <div class="text-center mt-3 p-3">
              © 2020 Copyright:
              <a class="text-dark" href="https://mdbootstrap.com/">Arrdaalas</a>
            </div>
          </footer>
        </div>
    </div>
</body>
</html>