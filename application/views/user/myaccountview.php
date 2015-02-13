<!doctype html>
<html>
<head>
	<?php echo $head ?>

	<!-- Load here view specific css and scripts -->


</head>

<body class="inked myaccountview">

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
					<h2>Mi Cuenta | <?php echo $user['name'].' '.$user['last_name'] ?></h2>
					<p>Editá tu información y administrá tus albumes de fotos.</p>

					<div role="tabpanel">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#account-info" aria-controls="account-info" role="tab" data-toggle="tab">Datos de usuario</a></li>
							<li role="presentation"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">Acerca de mi</a></li>
							<li role="presentation"><a href="#albums" aria-controls="albums" role="tab" data-toggle="tab">Albumes</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<!-- -->
							<div role="tabpanel" class="tab-pane active" id="account-info">
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
								<form method="post" action="/user/update_account" id="account-info-form">
									<div class="input-container">
										<div class="input-container-inner">
											<label for="name">Nombre</label>
											<input type="text" id="name" name="name" maxlength="60" required value=<?php echo '"'.$user['name'].'"'?>/>	
										</div>							
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="last_name">Apellido</label>
											<input type="text" id="last_name" name="last_name" maxlength="60" required value=<?php echo '"'.$user['last_name'].'"'?>/>
										</div>
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="email">Email</label>
											<input type="email" id="email" name="email" required value=<?php echo '"'.$user['email'].'"'?>/>
										</div>
									</div>
									
									<input type="submit" class="btn btn-default btn-lg" value="Guardar">
								</form>

								<form method="post" action="/user/update_password" id="password-form">
									<h3>Cambiar contraseña</h3>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="old-password">Contraseña</label>
											<input type="password" id="old-password" name="password" minlength="4" required/>
										</div>
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="password">Nueva Contraseña</label>
											<input type="password" id="password-reg" name="password" minlength="4" required/>
										</div>
									</div>
									<input type="submit" class="btn btn-default btn-lg" value="Guardar">
								</form>
							</div>
							<!-- -->
							<div role="tabpanel" class="tab-pane" id="about">
								<form method="post" action="/user/update_about" id="account-info-form">
									<div class="input-container">
										<div class="input-container-inner">
											<label for="about">Acerca de mi</label>
											<textarea name="about" id="about"><?php echo $user['about'] ?></textarea>		
										</div>							
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label>Estilos</label>
											<input type="checkbox" id="style-1" name="styles" value="1" /><label for="style-1">Old School</label>
											<input type="checkbox" id="style-2" name="styles" value="2" /><label for="style-2">New School</label>
											<input type="checkbox" id="style-3" name="styles" value="3" /><label for="style-3">Realista</label>
											<input type="checkbox" id="style-4" name="styles" value="4" /><label for="style-4">Retrato</label>
											<input type="checkbox" id="style-5" name="styles" value="5" /><label for="style-5">Oriental</label>
											<input type="checkbox" id="style-6" name="styles" value="6" /><label for="style-6">Maori</label>
											<input type="checkbox" id="style-7" name="styles" value="7" /><label for="style-7">Tribal</label>
											<input type="checkbox" id="style-8" name="styles" value="8" /><label for="style-8">Watercolor</label>
											<input type="checkbox" id="style-9" name="styles" value="9" /><label for="style-9">Celta</label>
											<input type="checkbox" id="style-10" name="styles" value="10" /><label for="style-10">Otro</label>
										</div>
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="availability">Disponibilidad</label>
											<textarea name="availability" id="availability"><?php //echo $user['availability'] ?></textarea>		
										</div>							
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label>Contacto</label>
											<label for="phone">Telefono</label>
											<input type="text" id="phone" name="phone" value=<?php echo '"'.$user['phone'].'"'?>/>
											<label for="address">Dirección</label>
											<input type="text" id="address" name="address" value=<?php echo '"'.$user['address'].'"'?>/>
										</div>							
									</div>
									<input type="submit" class="btn btn-default btn-lg" value="Guardar">
								</form>
							</div>
							<div role="tabpanel" class="tab-pane" id="albums">ALBUMS</div>
						</div>

					</div>

					
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