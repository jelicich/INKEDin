<header id="site-header" class="full-header">
	<div class="container">
		<div class="row">
			<nav class="col-md-5">
				<ul class="clearfix">
					<li><a href="/search/photos/">Tatuajes</a></li>
					<li><a href="/search/artists/">Artistas</a></li>
					<li><a href="/search/tops/">Tops</a></li>
				</ul>
			</nav>

			<div class="col-md-2" id="site-logo-container">
				<h1 id="site-logo"><a href="/">INKEDin</a></h1>
			</div>

			<div class="col-md-5" id="site-tools">
				<ul class="clearfix row">
					<li id="search-box" class="col-md-6 full">
						<form method="GET" action="/search/" onsubmit="inked.Common.Header.buildUrl(event)" id="search-form">
							<?php 
							if(!isset($search))
								$search = '';
							?>
							<input type="text" id="search-input" value="<?php echo $search ?>">
							<input type="submit" value="" id="search-btn">
						</form>
					</li>
					<li class="col-md-6 full user-menu clearfix">
						<div class="row">
							<div class="col-md-9 user-menu-buttons-container">
								<h3 class="user-menu-name">
									<a href=<?php echo "/profile/".$user['id'] ?> ><?php echo $user['name'].' '.$user['last_name'] ?></a>
								</h3>
								<ul class="user-menu-buttons clearfix">
									<li><a href="/user">Mi Cuenta</a></li>
									<li><a href="<?php echo "/message/inbox/"; ?>" >Inbox</a></li>
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