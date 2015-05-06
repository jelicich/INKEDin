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
					<h2>Elegí una de las siguientes opciones</h2>
					<form action="/auth/set_account_fb" method="POST">
						
						<div>
							<input type="radio" id="artist" name="role" value="1">
							<label for="artist">Soy un tatuador</label>
						</div>
						<div>
							<input type="radio" id="customer" name="role" value="2">
							<label for="customer">Busco tatuadores</label>
						</div>

						<input type="submit" class="btn btn-default" value="Confirmar">
					</form>

				</div>				
			</div>
			<!-- end left col -->


			<!-- right col -->
			<div class="col-md-4">
				
				<div class="side-register light-bg">

					<h3>Recordá lo siguiente</h3>
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