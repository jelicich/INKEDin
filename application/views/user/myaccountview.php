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
			<div class="col-md-8 my-account-left">
				<div class="register-wrapper">
					<div id="my-account-header">
						<h2>Mi Cuenta | <span><?php echo $user['name'].' '.$user['last_name'] ?></span></h2>
						<p>Editá tu información y administrá tus albumes de fotos.</p>
					</div>
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
							      <li><a href="#edit-album" aria-controls="edit-album" role="tab" data-toggle="tab" onclick="inked.Album.loadAlbumList()">Editar Album</a></li>
							    </ul>
							</li>
							<li role="presentation"><a href="#profile-pic" aria-controls="profile-pic" role="tab" data-toggle="tab">Perfil / Portada</a></li>
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
											<input type="text" id="name" class= "form-control" name="name" maxlength="60" required value=<?php echo '"'.$user['name'].'"'?>/>	
										</div>							
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="last_name">Apellido</label>
											<input type="text" id="last_name" class= "form-control" name="last_name" maxlength="60" required value=<?php echo '"'.$user['last_name'].'"'?>/>
										</div>
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="email">Email</label>
											<input type="email" id="email" class= "form-control" name="email" required value=<?php echo '"'.$user['email'].'"'?>/>
										</div>
									</div>

									<div class="input-container">
										<div class="input-container-inner">
											<label for="province">Provincia</label>
											<select id="province" class= "form-control" name="province">
												<option></option>
												<?php

													for($i = 0; $i < sizeof($provinces); $i++)
													{
														if($provinces[$i]['id'] == $user['province_id'])
														{
															echo '<option value="'.$provinces[$i]['id'].'" selected>'.$provinces[$i]['province'].'</option>';
														}
														else
														{
															echo '<option value="'.$provinces[$i]['id'].'">'.$provinces[$i]['province'].'</option>';
														}	
													}
												?>
											</select>
										</div>
									</div>

									<div class="input-container clearfix">
										<div class="input-container-inner">
											<label for="city">Ciudad</label>
											<select id="city" class= "form-control" name="city">
												<option></option>
												<?php 
												if(isset($cities))
												{
													for($i = 0; $i < sizeof($cities); $i++)
													{
														if($cities[$i]['id'] == $user['city_id'])
														{
															echo '<option value="'.$cities[$i]['id'].'" selected>'.$cities[$i]['city'].'</option>';
														}
														else
														{
															echo '<option value="'.$cities[$i]['id'].'">'.$cities[$i]['city'].'</option>';
														}	
													}
												}
												?>
											</select>
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
											<input type="password" class= "form-control" id="old_password" name="old_password" minlength="4" required/>
										</div>
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="new_password">Nueva Contraseña</label>
											<input type="password" id="new_password" class= "form-control" name="new_password" minlength="4" required/>
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
											<textarea name="about" id="about" class= "form-control"><?php echo $user['about'] ?></textarea>		
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
											<textarea name="availability" id="availability" class= "form-control"><?php echo $user['availability'] ?></textarea>		
										</div>							
									</div>
									<div class="input-container">
										<div class="input-container-inner">
											<label for="phone">Telefono</label>
											<input type="text" id="phone" class= "form-control" name="phone" value=<?php echo '"'.$user['phone'].'"'?>/>
											<label for="address">Dirección</label> <span>(Ej: Av. Santa Fe 2503, Buenos Aires, Argentina)</span>
											<input type="text" id="address" class= "form-control" name="address" value=<?php echo '"'.$user['address'].'"'?>/>
										</div>							
									</div>
									<input type="submit" class="btn btn-default btn-lg" value="Guardar">
								</form>
							</div>
							
							<!-- -->
							<div role="tabpanel" class="tab-pane" id="create-album">
								<?php echo $create_album_view ?>
							</div>

							<!-- -->
							<div role="tabpanel" class="tab-pane" id="edit-album">

								<!-- AJAX MSG CONTAINER -->
								<div id="user-album-edit-msg" class="msg-ajax">
								</div>
								<!-- END AJAX MSG CONTAINER -->
							</div>

							<!-- -->
							<div role="tabpanel" class="tab-pane" id="profile-pic">

								<?php echo $profile_picture_view ?>
								
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
					<img src="/assets/user/img/account-img.jpg" alt="" />
					<h3>Editá tu información</h3>
					<p>En esta sección podes editar todo lo que se muestra en tu perfil:</p>
					<ul>
						<li>Datos persoanles</li>
						<li>Información profesional</li>
						<li>Albumes de fotos</li>
						<li>Fotos de perfil y portada</li>
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