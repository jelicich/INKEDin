<!doctype html>
<html>
<head>
	<?php echo $head ?>

	<!-- Load here view specific css and scripts -->


</head>

<body class="inked activateview">

<div id="wrapper">
	<!-- header-->
	<?php echo $header; ?>
	<!-- end header-->


	<!-- content -->
	<section id="site-content" class="container">
		<div class="row">
			<!-- left col -->
			<div class="col-md-8">
				<div class="register-wrapper">
					<h2>Nueva contraseña</h2>
					<p>Tu nueva contraseña es: <strong><?php echo $new_password ?></strong></p>
				</div>				
			</div>
			<!-- end left col -->


			<!-- right col -->
			<div class="col-md-4">
				<div class="side-register light-bg">
					<img src="/assets/register/img/register-img.jpg" alt="" />
					<div class="login-button">
						<h3>Ya estas registrado?</h3>
						<a href="#" id="second-login" class="btn btn-default btn-lg btn-block" onclick="inked.Register.onClickSecondLogin()">Ingresar</a>
					</div>

					<h3>Registrate ahora</h3>
					<p>Como tatuador podes:</p>
					<ul>
						<li>Subir fotos de tus trabajos</li>
						<li>Publicar informacion para que te contacten</li>
						<li>Recibir mensajes</li>
					</ul>
					<p>Como entusiasta podes:</p>
					<ul>
						<li>Buscar tatuadores y fotos</li>
						<li>Armar tu lista de favoritos</li>
						<li>Contactar a los tatuadores</li>
					</ul>
				</div>
				
			</div>
			<!-- end right col -->
			
		</div>
	</section>
	<!-- end content -->

	<?php echo $footer ?>
	
</div>
</body>
</html>