<!doctype html>
<html>
<head>
	<?php echo $head ?>
	<!-- Load here view specific css and scripts -->
</head>

<body class="inked profileview">

<div id="wrapper">
	<!-- header-->
	<?php echo $header;  ?>
	<!-- end header-->


<!-- content -->
	<section id="site-content" class="container">
		<div class="row">
			<!-- COVER PIC -->
			<div class="col-md-12" id="container-cover-pic">
				<div id="inner-container-cover-pic">
					<a href="#"><?php echo $profile['cover'] ?></a>
				</div>
			</div>
			<!-- END COVER PIC -->

			<!-- LEFT COL -->
			<article class="col-md-3" id="profile-left-col">
				<div id="profile-fix-wrapper" class="profile-free">
					<!-- PROFILE PIC -->
					<div id="profile-pic-container" class="border-img">
						<a href="#"><?php echo $profile['photo'] ?></a>
					</div>
					<!-- END PROFILE PIC -->
					<div id="profile-rating-container" class="clearfix border-divider">
						
						<div id="ratingvew-container">
							<?php echo $ratingview; ?>
						</div>
						
					</div>
					<div class="profile-buttons-container border-divider">

					<?php 
						if ( $profile['id'] != $user['id']  ) {
					?>
							<a href="#" class="btn btn-default btn-block btn-profile" id="add-fav" data-profile-id ="<?php echo $profile['id']; ?>" onclick="inked.Profile.saveFollower()" >AGREGAR A FAVORITOS  <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
							<a href="#" class="btn btn-default btn-block btn-profile" id="send-msg"  >ENVIAR MENSAJE <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
					
					<?php 
						}// end if
					?>

					</div>
					<nav class="menu-profile">
						<ul>
							<li><a href="/profile/<?php echo $profile['id']?>">Información</a></li>
							<li><a href="/profile/<?php echo $profile['id']?>/albums_list">Albumes</a></li>
							<li><a href="/profile/<?php echo $profile['id']?>/comments">Comentarios</a></li>
						</ul>
					</nav>
				</div>
			</article>
			<!--END LEFT COL -->

			<!-- MID COL -->
			<?php echo $content ?>
			<!--END MID COL -->

			<!--RIGHT COL-->
			<?php 
			if(isset($sidebar))
				echo $sidebar 
			?>
			<!--RIGHT COL -->
		</div>
	</section>
	<!-- end content -->

	<?php echo $footer ?>

</div>



</body>
</html>