<?php
	require_once "../database/database.php";
?>
<!--
<label for="avatar">Choose a profile picture:</label>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
-->
<!DOCTYPE html>
<html lang="en">
<?php include_once "../partials/header.php" ?>
<body>
	<div class="container mt-5">
		<div class="principal p-3 shadow-lg rounded-2" style="background-color: red;">
			<h5>¿Qué estas pensando?</h5>
			<div class="p-3 shadow-lg rounded-2" style="background-color: yellow;">
				<form action="" method="POST">
					<textarea placeholder="Estoy pensando en..."class="form-control" name="pub-text" rows="6"></textarea>
				</form>
				<div class="d-flex align-center">
					<div class="mt-2">
						Boton_Imagenes
					</div>
					<div class="mt-2" style="padding-left: 15px;">
						Boton_Videos
					</div>
					<div class="ms-auto mt-2">
						Boton_publicar
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>