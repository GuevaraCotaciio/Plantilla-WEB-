
<!DOCTYPE HTML>

<html>
	<head>
		<title>Horizons by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
		
		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Anderson Stiven Guevara cotacio</a></h1>
					
						<?php include 'Siderbar.php'; ?>
						
					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<h2>Quien soy</h2>
										<span class="byline">Me caracteriso por ser responsable en mis obligaciones, soy un poco callado pues no me logro socializar bien con todos. Me gusta leer, tocar instrumerntos musicales como la Guitarra y el Saxofón, también me gusta mucho la naturaleza y estudiar para tener más conocimiento día a día. </span>
											
							</div>
						</div>

				</div>
			</div>

		<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h2>Carrera Actual</h2>
						<span class="byline">Analisis y desarrollo de sistemas de información</span>
					</header>
					<div class="row no-collapse-1">
						<section class="4u">
							<a href="#" class="image feature"><img src="images/cerebro.jpg" alt=""></a>
							<p><h2>¿Qué es?</h2>La programación es la creación de aplicaciones ya sean web, o de escritorio. para la creacion de estas es necesario uar diferentes lenguajes de programación que son diseñados para algunas plataformas, algunos de estos lenguajes son: Java, C#, PHP, HTML, JavaScript, Rubi, C++, etc.</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/alcance.jpg" alt=""></a>
							<p><h2>Alcance</h2>El alcance que tiene la programacion depende que tan creativo seas como un programador o desarrollador de aplicaciones, si tu puedes imaginas algo y siguiendo los pasos necesarios para crear un programa se puede crear.</p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/lenguaje de progra.png" alt=""></a>
							<p><h2>objetivo</h2> El objeivo es poder ayudar a diferentes sectores simplificando gran trabajo, llevando un registro mas ordenado, y tiniendo un orden en los dotos manejados por una entidad o persona. </p>
						</section>
					</div>
				</section>
			</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<section class="container">

					<header class="4u">
						<h2>Formulario</h2>
					</header>

					<div class="row">
					
						<!-- formulario -->
						<form class="12u" GET action="recive.php">

							<div class="6u">
								<section>

									<label>Nombre <input type="text" name="nombre" required 
										placeholder="<?php if(isset($_GET['error'])) echo $_GET['error'] ?> Nombre" 
										class= "<?php if(isset($_GET['Error'])) echo $_GET['Error'] ?>" 
										value="<?php if(isset($_GET['val1'])) echo $_GET['val1'] ?>" ></label>

									<p></p>
								</section>
							</div>

							<div class="6u">
								<section>
									<label>Teléfono<input class="<?php if(isset($_GET['Error2'])) echo $_GET['Error2'] ?>" 
									 type="text" name="telefono" required
										placeholder="Teléfono <?php if(isset($_GET['error2'])) echo $_GET['error2'] ?>"  
										value = "<?php if(isset($_GET['val2'])) echo $_GET['val2'] ?>"></label>
									<p></p>
								</section>
							</div>

							<div class="6u">
								<section>
									<label> Correo<input type="email" name="correo" required
										 placeholder="Correo <?php if(isset($_GET['error3'])) echo $_GET['error3'] ?>"  
										 class= "<?php  if(isset($_GET['Error3'])) echo $_GET['Error3']  ?>"
										 value = "<?php if(isset($_GET['val3'])) echo $_GET['val3']?>" ></label>
									<p></p>
								</section>
							</div>

							<div class="6u">
								<section>
									<label> Asunto<input type="text" name="asunto" required 
										placeholder="<?php if(isset($_GET['error4'])) echo $_GET['error4'] ?>Asunto" 
									 	class= "<?php if(isset($_GET['Error4'])) echo $_GET['Error4'] ?>"
									 	value = "<?php if(isset($_GET['val4'])) echo $_GET['val4']?>" ></label>
									<p></p>
								</section>
							</div>

							<div class="6u">
								<section>
									<label> Mensaje<textarea name="mensaje" required
										placeholder="<?php if(isset($_GET['error5'])) echo $_GET['error5'] ?>mensaje"  
										class = "<?php if(isset($_GET['Error5'])) echo $_GET['Error5'] ?>" ></textarea></label>
								</section>
							</div>
							
							<div class="6u">
								<section>
									<input class="sub" type="submit" name="enviar" value="Enviar">
								</section>
							</div>

						</form>
							
				</section>
			</div>

			<?php include 'footer.php'; ?>

	</body>

</html>
