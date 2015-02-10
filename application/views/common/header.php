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
					<li class="col-md-3 full id-container">
						<a href="/register" class="id-buttons">Registrarse</a>
					</li>
					<li class="col-md-3 full id-container">
						<a href="#" onclick="inked.Common.Header.onClickLogin()" class="id-buttons">Ingresar</a>
						<div id="login-toggle" class="login-container">
							<form method="POST" action="/auth/login" onsubmit="inked.Common.Header.validateForm()">
								<label for="username">Usuario</label>
								<input type="text" name="username" id="username" value="" />
								<label for="password">Contraseña</label>
								<input type="password" name="password" id="password" value="" />
								<input type="submit" id="submit-login" class="btn btn-default btn-block" value="Ingresar" />
								<div class="fb-btn-container">
									<a href="#" class="btn btn-primary btn-block">Ingresar con tu cuenta de Facebook</a>
								</div>
							</form>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>	