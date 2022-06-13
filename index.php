<?php
  require_once "database/database.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "partials/header.php" ?>
<body>
  <div class="main">
      <div class="container mt-5">
        <?php if(isset($_SESSION['usuario'])) { ?>
          <div class="principal p-3 rounded-2 text-center">
            <h1> Bienvenido a Suther, <?php echo $_SESSION['usuario'] ?></h1>
            <div class="text-principal shadow-lg rounded-2" style="background-color: #b8b8ff;">
              <p>Por ahora no hay noticias!</p>
            </div>
          </div>
        <?php } ?>
        <?php if(!isset($_SESSION['usuario'])) { ?>
          <div class="principal p-3 rounded-2 text-center">
          <h1>Bienvenid@ A Suther</h1>
          <div class="texto-principal shadow-lg p-3 rounded-2" style="background-color: #b8b8ff;">
            <p class="fw-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi ex commodi totam accusantium sed harum tempora modi sunt, illo obcaecati iste voluptate odit? Excepturi quia, quas minima distinctio possimus dolor.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. A fuga aut quibusdam necessitatibus minus ducimus dolores, explicabo mollitia quam aperiam soluta at eum facilis libero non ipsa adipisci sunt hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatem iste repellat corporis vel, rem perspiciatis! Quos enim cum perspiciatis minus reprehenderit earum facere! Ipsum laudantium nam illum suscipit temporibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, quia quo. Nostrum repellendus dignissimos repudiandae obcaecati. Sequi velit sapiente exercitationem deserunt, tempore tenetur numquam aut quia accusantium, autem maxime consectetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis corporis maiores itaque voluptatibus repellat quae doloribus nesciunt, non minus ab beatae a eligendi assumenda officiis nulla at recusandae id esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo tempora exercitationem natus ullam illum quidem quisquam praesentium quae assumenda delectus? Debitis voluptas dolores possimus blanditiis, corporis aliquam ipsam perspiciatis hic. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolore perferendis officiis iusto illo ducimus, mollitia molestias saepe nisi nesciunt in magni ab? Quod, eligendi! Tempore illum aspernatur officiis nesciunt.</p>
          </div>
        </div>
        <?php } ?>
        <?php include_once "partials/footer.php" ?>
      </div>
  </div>
</body>
</html>