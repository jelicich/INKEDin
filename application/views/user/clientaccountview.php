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
							<li role="presentation"><a href="#profile-pic" aria-controls="profile-pic" role="tab" data-toggle="tab">Perfil / Portada</a></li>
							<li role="presentation"><a href="#favourite-pics" aria-controls="favourite-pics" onclick="inked.Photo.loadFavouritePhotos()" role="tab" data-toggle="tab">Fotos favoritas</a></li>
							<li role="presentation"><a href="#delete-account" aria-controls="delete-account" role="tab" data-toggle="tab">Cuenta</a></li>
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
								<!-- AJAX MSG CONTAINER -->
								<div id="user-info-msg" class="msg-ajax">
								</div>
								<!-- END AJAX MSG CONTAINER -->
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
									<!-- AJAX MSG CONTAINER -->
									<div id="user-password-msg" class="msg-ajax">
									</div>
									<!-- END AJAX MSG CONTAINER -->
									<div class="input-container">
										<div class="input-container-inner">
											<label for="old_password">Contraseña</label>
											<input type="password" id="old_password" name="old_password" minlength="4" required/>
										</div>
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="new_password">Nueva Contraseña</label>
											<input type="password" id="new_password" name="new_password" minlength="4" required/>
										</div>
									</div>
									<input type="submit" class="btn btn-default btn-lg" value="Guardar">
								</form>
							</div>

							<!-- -->
							<div role="tabpanel" class="tab-pane" id="profile-pic">

								<?php echo $profile_picture_view ?>
								
							</div>
							<!-- -->
							<div role="tabpanel" class="tab-pane" id="favourite-pics">

								<!-- AJAX MSG CONTAINER -->
								<div id="favourites-edit-msg" class="msg-ajax">
								</div>
								<!-- END AJAX MSG CONTAINER -->

							</div>

							<div role="tabpanel" class="tab-pane" id="delete-account">

								<p>Podes eliminar tu cuenta haciendo click en el siguiente boton, tene en cuenta que toda tu informacion sera borrada asi como tambien las fotos que hayas subido. Esta accion no se puede deshacer.</p>
								<p>Si tenes algun comentario no dudes en escribirnos a <a href="mailto:hola@inkedin.com">hola@inkedin.com</a></p>
								<a href="/user/delete_account" class="btn btn-danger">CERRAR CUENTA</a>
								
							</div>

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