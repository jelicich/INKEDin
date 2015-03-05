<!doctype html>
<html>
<head>
	<?php echo $head ?>

	<!-- Load here view specific css and scripts -->


</head>

<body class="inked profileview">

<div id="wrapper">
	<!-- header-->
	<?php echo $header; ?>
	<!-- end header-->


	<!-- content -->
	<section id="site-content" class="container">
		<div class="row">
			<!-- COVER PIC -->
			<div class="col-md-12" id="container-cover-pic">
				<div id="inner-container-cover-pic">
					<a href="#"><img src="/assets/cover-pic.jpg" id="cover-pic" alt=""></a>
				</div>
			</div>
			<!-- END COVER PIC -->

			<!-- LEFT COL -->
			<article class="col-md-3" id="profile-left-col">
				<div id="profile-fix-wrapper" class="profile-free">
					<!-- PROFILE PIC -->
					<div id="profile-pic-container" class="border-img">
						<a href="#"><img src="/assets/img1.jpg" alt=""/></a>
					</div>
					<!-- END PROFILE PIC -->
					<div id="profile-rating-container" class="clearfix border-divider">
						<div class="rating rate">
							<span>4.5</span>
						</div>
						<div class="rating stars">
							<ol id="rating-scale" class="clearfix">
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ol>
							<span>Calificá a este artista</span>
						</div>
					</div>
					<div class="profile-buttons-container border-divider">
						<a href="#" class="btn btn-default btn-block btn-profile" id="add-fav">AGREGAR A FAVORITOS  <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
						<a href="#" class="btn btn-default btn-block btn-profile" id="send-msg">ENVIAR MENSAJE <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
					</div>
					<nav class="menu-profile">
						<ul>
							<li><a href="#">Información</a></li>
							<li><a href="#">Albumes</a></li>
							<li><a href="#">Comentarios</a></li>
						</ul>
					</nav>
				</div>
			</article>
			<!--END LEFT COL -->

			<!-- MID COL -->
			<article class="col-md-6" id="profile-mid-col">
				<h1>Nombre del Artista</h1>
				<div id="artist-info-container" class="light-bg">
					<div class="border-divider">
						<h2>Acerca de mi</h2>
						<p>I'm jumping in here a little late, but came across this page when pondering it myself. Of course I don't know how Facebook or Twitter justified it, but here is my own thought process for what it's worth. In the end, I concluded that this practice is not that unsemantic (is that a word?). In fact, besides shortness and the nice association of "i is for icon," I think it's actually the most semantic choice for an icon when a straightforward  tag is not practical.</p>
					</div>
					<div class="border-divider">
						<h2>Estilos</h2>
						<ul>
							<li>Tradicional</li>
							<li>Oriental</li>
							<li>Blanco y Negro</li>
						</ul>
					</div>
					<div class="border-divider">
						<h2>Disponibilidad</h2>
						<p>I'm jumping in here a little late, but came across this page when pondering it myself. Of course I don't know how Facebook or Twitter.</p>
					</div>
					<div>
						<h2>Contacto</h2>
						<dl>
							<dt>Telefono</dt>
							<dd>5555-5555</dd>
							<dt>Dias y Horarios</dt>
							<dd>Lunes a viernes de 9 a 18</dd>
							<dt>Direccion</dt>
							<dd>Guemes 2989</dd>
						</dl>
						<div id="map">
						</div>
					</div>
				</div>
			</article>
			<!--END MID COL -->

			<!--RIGHT COL-->
			<aside class="col-md-3" id="side-content-profile">
				<div style="height: 300px; background:brown">
				</div>
			</aside>
			<!--RIGHT COL -->
		</div>
	</section>
	<!-- end content -->

	<?php echo $footer ?>

</div>



</body>
</html>