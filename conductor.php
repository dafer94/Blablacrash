<!DOCTYPE html>
<html>
<head>
	<title>Blablacrash</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<!--modal para crear nuevo viaje-->
	<div id="modal_viaje" class="modal">
		<div class="modal-content">
			<form name="form_ingredient" onsubmit="return validateIngredient()" action="add_ingredient.php" accept-charset="utf-8" method="POST" enctype="multipart/form-data">

				<h4 class="center-align">Nuevo ingrediente</h4>

				<div class="input-field">
				  <input type="text" name="nombre_ingrediente" id="nombre_ingrediente">
				  <label for="nombre_ingrediente">Ingrediente*</label>
				</div>

				<div class="input-field">
				  <input type="text" name="cantidad_inicial" id="cantidad_inicial">
				  <label for="cantidad_inicial">Cantidad inicial*</label>
				</div>      

				<button type="submit" class="btn waves-effect waves-light col s2 light-green darken-1 center-align">Guardar</button>

			</form>
		</div>
	</div>

	<?php include "header_log.php"; ?>
	<div class="wrapper">
		<button id="nuevo-viaje" class="btn waves-effect waves-light col s2 darken-1">Crear nuevo viaje</button>		
	</div>

</body>
</html>