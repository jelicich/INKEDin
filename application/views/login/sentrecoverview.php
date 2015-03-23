<!doctype html>
<html>
<head>
	<?php echo $head ?>

	<!-- Load here view specific css and scripts -->


</head>

<body class="inked loginview">

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
					<h2>Recuperar contraseña</h2>
					<p>Ingresa tu email y te enviaremos una nueva contraseña.</p>

					<?php if (isset($errors)): ?>
					<div class="error-register">
						<p class="message">Se encontraron los siguientes errores. Por favor verifica la informacion</p>
						<ul class="errors">
						<?php foreach ($errors as $message): ?>
						    <li><?php echo $message ?></li>
						<?php endforeach ?>
						</ul>
					</div>
					<?php endif ?>

					<?php if (isset($result)): ?>
					<div class="error-register">
						<p class="message"><?php echo $result ?></p>
					</div>
					<?php endif ?>
					

					<form method="post" action="/auth/reset_password" onsubmit='inked.Login.validateForm()'>
						
						<div class="input-container">
							<div class="input-container-inner">
								<label for="email">Email</label>
								<input type="text" id="email-view" name="username" value="" />
							</div>
							<p class="info-input">Campo obligatorio</p>
						</div>
						<input type="submit" class="btn btn-default btn-lg" value="Enviar">
					</form>

				</div>				
			</div>
			<!-- end left col -->


			<!-- right col -->
			<div class="col-md-4">
				<div class="side-register light-bg">
					<img src="/assets/register/img/register-img.jpg" alt="" />
					<div class="login-button">
						<h3>Ya estas registrado?</h3>
						<a href="#" id="second-login" class="btn btn-default btn-lg btn-block" onclick="inked.Login.onClickSecondLogin()">Ingresar</a>
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