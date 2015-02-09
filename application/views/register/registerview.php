<!doctype html>
<html>
<head>
	<?php echo $head ?>

	<!-- Load here view specific css and scripts -->


</head>

<body class="inked registerview">

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
					<h2>Registrate en INKEDin</h2>
					<p>Completa el formulario de registro o ingresa con tu cuenta de Facebook</p>
					<div class="light-bg register-fb-container">
						<a href="#" class="btn btn-primary btn-block">Ingresar con tu cuenta de Facebook</a>
					</div>

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


					<form method="post" action="/register/register">
						<div class="input-container">
							<div class="input-container-inner">
								<label for="name">Nombre</label>
								<input type="text" id="name" name="name" value="" />	
							</div>							
							<p class="info-input">Solo letras y espacios</p>
						</div>
						<div class="input-container">
							<div class="input-container-inner">
								<label for="last_name">Apellido</label>
								<input type="text" id="last_name" name="last_name" value="" />
							</div>
							<p class="info-input">Solo letras y espacios</p>
						</div>
						<div class="input-container">
							<div class="input-container-inner">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" value="" />
							</div>
							<p class="info-input">Recibiras la confirmacion</p>
						</div>
						<div class="input-container">
							<div class="input-container-inner">
								<label for="password">Contraseña</label>
								<input type="text" id="password" name="password" value="" />
							</div>
							<p class="info-input">Mas de 4 caracteres</p>
						</div>
						<div class="input-container">
							<input type="radio" id="user-artist" name="role" value="1" />
							<label for="user-artist">Soy un tatuador</label>
						</div>
						<div class="input-container">
							<input type="radio" id="user-regular" name="role" value="2" />
							<label for="user-regular">Busco tatuadores</label>
						</div>
						
						<p class="terms">Al registrarme acepto los <a href="#">terminos y condiciones</a> del sitio</p>
						<input type="submit" class="btn btn-default btn-lg" value="Registrarme!">
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
						<a href="#" class="btn btn-default btn-lg btn-block" onclick="$('#login-toggle').toggle();">Ingresar</a>
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