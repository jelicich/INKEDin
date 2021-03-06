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
			<div class="col-md-8 my-account-left">
				<div class="register-wrapper">
					<h2>Registrate en INKEDin</h2>
					<p>Completa el formulario de registro o ingresa con tu cuenta de Facebook</p>
					
					<div class="alert alert-danger">
						<a href="#" class="btn btn-primary btn-block" onclick="inked.Common.Header.fb_login();">Ingresar con tu cuenta de Facebook</a>
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


					<form method="post" action="/register/register" id="register-form">
						<div class="input-container">
							<div class="input-container-inner">
								<label for="name">Nombre</label>
								<input type="text" id="name" class="form-control" name="name" value="" maxlength="60" required/>	
							</div>							
							<p class="info-input">Solo letras y espacios</p>
						</div>
						<div class="input-container">
							<div class="input-container-inner">
								<label for="last_name">Apellido</label>
								<input type="text" id="last_name" class="form-control" name="last_name" value="" maxlength="60" required/>
							</div>
							<p class="info-input">Solo letras y espacios</p>
						</div>
						<div class="input-container">
							<div class="input-container-inner">
								<label for="email">Email</label>
								<input type="email" id="email" class="form-control" name="email" value="" required/>
							</div>
							<p class="info-input">Recibiras la confirmacion</p>
						</div>
						<div class="input-container">
							<div class="input-container-inner">
								<label for="password-reg">Contraseña</label>
								<input type="password" id="password-reg" class="form-control" name="password" value="" minlength="4" required/>
							</div>
							<p class="info-input">Mas de 4 caracteres</p>
						</div>
						<div class="input-container">
							<input type="radio" id="user-artist" name="role" value="1" required/>
							<label for="user-artist">Soy un tatuador</label>
						</div>
						<div class="input-container">
							<input type="radio" id="user-regular" name="role" value="2" required/>
							<label for="user-regular">Busco tatuadores</label>
						</div>
						
						<p class="terms">Al registrarme acepto los <a href="/terms" target="_blank">terminos y condiciones</a> del sitio</p>
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
						<a href="#" id="second-login" class="btn btn-default btn-lg btn-block" onclick="inked.Register.onClickSecondLogin(event)">Ingresar</a>
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