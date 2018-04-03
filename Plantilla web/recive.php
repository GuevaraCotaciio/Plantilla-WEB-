<?php 
error_reporting();

	if(isset($_GET['nombre']) && preg_replace('/[A-Z][a-zñÑáéíóúÁÉÍÓÚ]/i', '-', $_GET['nombre']) == true ){

		$nombre = $_GET['nombre'];
		$variables = "val1=$nombre"; 
	}else{
		$msjerror = "error=Escriba su ";
		$error = "Error=error";
	}

	if(isset($_GET['telefono']) && is_numeric($_GET['telefono']) && strlen($_GET['telefono']) >= 7 && strlen($_GET['telefono']) <=10){

		$tel = $_GET['telefono'];
		$variables .= "&val2=$tel";
	}else{
		$msjerror .= "&error2= no valido";
		$error .= "&Error2=error";
	}

	if(isset($_GET['correo']) && (substr_count($_GET['correo'], '@' ) == 1) && (substr_count($_GET['correo'], '.' ) == 1)){

		$correo = $_GET['correo'];
		$variables .= "&val3=$correo";
	}else{
		$msjerror .= "&error3= no valido";
		$error .= "&Error3=error";
	}

	if(isset($_GET['asunto']) && preg_replace('/[A-Z][a-z0-9ñáéíóúÁÉÍÓÚ]/i', '-', $_GET['asunto']) == true){

		$asunto = $_GET['asunto'];
		$variables .= "&val4=$asunto";
	}else{
		$msjerror .= "&error4=No hay ";
		$error .= "&Error4=error";
	}

	if(isset($_GET['mensaje']) && preg_replace('/[A-Z][a-z0-9ñáéíóúÁÉÍÓÚ]/i', '-', $_GET['mensaje']) == true){

		$mensaje = $_GET['mensaje'];
		$variables .= "&val5=$mensaje";
	}else{
		$msjerror .= "&error5=No hay ";
		$error .= "&Error5=error";
	}

	if(isset($msjerror)){
		header('location:index.php?'.$msjerror."&".$variables."&".$error);
	}  ?>

<!DOCTYPE html>
	<html lang="es">
		<head>
			<title>Datos recividos</title>
		
				<link rel="stylesheet" href="css/skel.css" />
				<link rel="stylesheet" href="css/style.css" />
		</head>


			<!-- Nav -->
			<div id="header">
				<div class="container">
						
					<h1><a href="#" id="logo">Datos Recividos</a></h1>

					<?php include 'Siderbar.php'; ?>
					
				</div>
			</div>

				
			<div id="footer">
				<div class="container">
					<div class="row no-collapse-1">

						<section class="3u">
							<p> <h2 class="ti">Nombre</h2>
							<?php echo $nombre; ?></p>
						</section>

						<section class="3u">
							<p> <h2 class="ti">Teléfono</h2>
							<?php echo $tel; ?></p>
						</section>

						<section class="3u">
							<p> <h2 class="ti">Correo</h2>
							<?php echo $correo; ?></p>
						</section>

						<section class="3u">
							<p> <h2 class="ti">Asunto</h2>
							<?php echo $asunto; ?></p>
						</section>

						<section class="6u">
							<p> <h2 class="ti">Mensaje</h2>
							<?php echo $mensaje; ?></p>
						</section>

					</div>
				</div>
			</div>

		<?php include 'footer.php' ?>
	
	</html>	