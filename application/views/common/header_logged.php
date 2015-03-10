<header id="site-header" class="full-header">
	<div class="container">
		<div class="row">
			<nav class="col-md-5">
				<ul class="clearfix">
					<li><a href="#">Tatuajes</a></li>
					<li><a href="#">Artistas</a></li>
					<li><a href="#">Tops</a></li>
				</ul>
			</nav>

			<div class="col-md-2" id="site-logo-container">
				<h1 id="site-logo"><a href="/">INKEDin</a></h1>
			</div>

			<div class="col-md-5" id="site-tools">
				<ul class="clearfix row">
					<li id="search-box" class="col-md-6 full">
						<input type="text" name="searchbox" value>
						<input type="submit" value="" id="search-btn">
					</li>
					<li class="col-md-6 full user-menu clearfix">
						<div class="row">
							<div class="col-md-9 user-menu-buttons-container">
								<h3 class="user-menu-name">
									<a href=<?php echo "/profile/".$user['id'] ?> ><?php echo $user['name'].' '.$user['last_name'] ?></a>
								</h3>
								<ul class="user-menu-buttons clearfix">
									<li><a href="/user">Mi Cuenta</a></li>
									<li><a href="#">Mensajes</a></li>
									<li><a href="/auth/logout">Salir</a></li>
								</ul>
							</div>
							<a href=<?php echo "/profile/".$user['id'] ?> > <?php echo $user['photo']; ?> </a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>	