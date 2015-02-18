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
							<li role="presentation"><a href="#about-me" aria-controls="about-me" role="tab" data-toggle="tab">Acerca de mi</a></li>
							<li role="presentation" class="dropdown">
							    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
							      Album <span class="caret"></span>
							    </a>
							    <ul class="dropdown-menu" role="menu">
							      <li><a href="#create-album" aria-controls="create-album" role="tab" data-toggle="tab">Crear Album</a></li>
							      <li><a href="#edit-album" aria-controls="edit-album" role="tab" data-toggle="tab">Editar Album</a></li>
							    </ul>
							</li>
							
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
							<div role="tabpanel" class="tab-pane" id="about-me">
								<form method="post" action="/user/update_about" id="account-about-form">
									<!-- AJAX MSG CONTAINER -->
									<div id="user-about-msg" class="msg-ajax">
									</div>
									<!-- END AJAX MSG CONTAINER -->
									<div class="input-container">
										<div class="input-container-inner">
											<label for="about">Acerca de mi</label>
											<textarea name="about" id="about"><?php echo $user['about'] ?></textarea>		
										</div>							
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label class="block">Estilos</label>
											<ul class="row styles-container">
												<?php
												$checked = '';
												for($i = 0; $i < sizeof($styles); $i++)
												{
													
													for($j = 0; $j < sizeof($user['styles']); $j++)
													{
														
														if($user['styles'][$j]['id'] == $styles[$i]['id'])
														{
															$checked = 'checked';
															break;
														}
														else
														{
															$checked = '';
														}
														
													}
													echo '<li class="col-md-3">
															<input type="checkbox" id="style-'.$styles[$i]['id'].'" name="styles" value="'.$styles[$i]['id'].'" '.$checked.'/> <label for="style-'.$styles[$i]['id'].'">'.$styles[$i]['style'].'</label>
														</li>';	
													
												}
												
												?>
											</ul>
												
										</div>
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="availability">Disponibilidad</label>
											<textarea name="availability" id="availability"><?php echo $user['availability'] ?></textarea>		
										</div>							
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="phone">Telefono</label>
											<input type="text" id="phone" name="phone" value=<?php echo '"'.$user['phone'].'"'?>/>
											<label for="address">Dirección</label> <span>(Ej: Av. Santa Fe 2503, Buenos Aires, Argentina)</span>
											<input type="text" id="address" name="address" value=<?php echo '"'.$user['address'].'"'?>/>
										</div>							
									</div>
									<input type="submit" class="btn btn-default btn-lg" value="Guardar">
								</form>
							</div>
							
							<!-- -->
							<div role="tabpanel" class="tab-pane" id="create-album">
								<!-- AJAX MSG CONTAINER -->
								<div id="user-album-create-msg" class="msg-ajax">
								</div>
								<!-- END AJAX MSG CONTAINER -->
								<form method="post" action="/user/create_album" id="new-album-form">
									<div class="input-container">
										<div class="input-container-inner">
											<label class="block">Nuevo Album</label>
											<label for="album-name">Nombre</label>
											<input type="text" id="album-name" name="name" maxlength="60" required value=""/>	
										</div>							
									</div>
									<input type="submit" class="btn btn-default btn-lg" value="Crear">
								</form>

								<form id="upload" method="post" action="/user/upload_photo" enctype="multipart/form-data">
									<div id="drop">
										Arrastra tus fotos o 

										<a class="btn btn-default btn-lg">Buscar</a>
										<input type="file" name="upl" multiple />
										<input type="hidden" name="album_id" id="album-id" />
									</div>

									<ul>
										<!-- The file uploads will be shown here -->
									</ul>

								</form>

								<button class="btn btn-default btn-lg" id="finish-album" onclick="inked.User.finishNewAlbum()">Terminar!</button>
								<!-- AJAX MSG CONTAINER -->
								<div id="user-album-finish-msg" class="msg-ajax">
								</div>
								<!-- END AJAX MSG CONTAINER -->
							</div>

							<!-- -->
							<div role="tabpanel" class="tab-pane" id="edit-album">
								
								<form method="post" action="/user/edit_album" id="edit-album-form">
									<div class="input-container">
										<label class="block">Editar Album</label>
										<div class="input-container-inner">
											<label for="album-name">Foto</label>
											<input type="checkbox">
										</div>							
									</div>
									<input type="submit" class="btn btn-default btn-lg" value="Guardar">
								</form>

								<!-- AJAX MSG CONTAINER -->
								<div id="user-album-edit-msg" class="msg-ajax">
								</div>
								<!-- END AJAX MSG CONTAINER -->
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
<script src="/assets/user/js/jquery.knob.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="/assets/user/js/jquery.ui.widget.js"></script>
<script src="/assets/user/js/jquery.iframe-transport.js"></script>
<script src="/assets/user/js/jquery.fileupload.js"></script>

<!-- Our main JS file -->
<script src="/assets/user/js/script.js"></script>
</body>
</html>