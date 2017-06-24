<?php

	session_start();

	/*Inicialización temporal para pruebas*/
	$_SESSION['user'] = 'alex@mail.com';
	$_SESSION['type'] = 1;


	/*	Si se intenta acceder a la ventana de conductor sin haber iniciado 
		sesión como tal, se redirige a la ventana inicial de la web 	*/ 
	if (!isset($_SESSION['user'])){

	    header('Location: index.php');
	    die();

	}else if ($_SESSION['type'] != 1){

	    header('Location: index.php');
	    die();

	}


	require_once('connector_db.php');

	/* Variable global para almacenar la query*/
	$query;

	$conection = establecerConexionDB();

?>

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
			<form name="form_ingredient" action="add_ingredient.php" accept-charset="utf-8" method="POST" enctype="multipart/form-data">

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
		<button id="nuevo-viaje" onclick="$('#modal_viaje').modal('open')" class="btn waves-effect waves-light col s2 darken-1">Crear nuevo viaje</button>
		<?php cargarViajes(); ?>		
	</div>

</body>
</html>


<?php

	function cargarViajes() {
		global $query, $conection;

		echo '<br><hr>';

		$sentence = "SELECT * FROM viajes WHERE conductor = " . $_SESSION['user'] . "";

		$query = mysqli_query($conection, $sentence) or die(ERROR_CONEXION_DB);

		if(mysqli_num_rows($query) == 0){
			echo '<h4 class="no_result center-align">Aún no has publicado ningún viaje.</h4>';      
		}
		else{
			while($viaje = mysqli_fetch_array($query)) {
				echo '<div class="boxed-div row">
				        <p>
				        	'.$viaje['origen'].' - '.$viaje['destino'].'
				        </p>';
				
				echo 	'<p>
				        	'.$viaje['precio'].' €
				        </p>
				        <span><a href="delete_suggestion.php?id='.$viaje['id'].'" class="col s5 btn waves-effect waves-light light-green darken-1">Borrar</a></span>           
				  
				      </div>';
			}
		}
		echo '</div>';
	}



?>