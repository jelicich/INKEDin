<header id="site-header" class="full-header navbar navbar-default">
	<div class="container">
		<div class="row">

		<div class="navbar-header">
		     <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> -->
		     <button class="navbar-toggle collapsed menu-toggle" id="menu-toggle">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
	    </div>





	<div id="sidebar-wrapper" class="menu-toggle">
	    <ul class="sidebar-nav ">
	        
	         <li class="sidebar-brand">
	            <a href="#">
	                
	            </a>
	        </li> 

	        <li>
	            <a href="#">Registrarse</a>
	        </li>

	        <li>
	            <a href="#">Ingresar</a>
	        </li>


	        <li>
	            <a href="/search/photos/">Tatuajes</a>
	        </li>
	        
	        <li>
	            <a href="/search/artists/">Artistas</a>
	        </li>

	        <li>
	            <a href="/search/tops/">Tops</a>
	        </li>


	         <!-- <li id="search-box" class="col-md-6 full">
				<form method="GET" action="/search/" onsubmit="inked.Common.Header.buildUrl(event)" id="search-form">
												<input type="text" id="search-input" value="">
					<input type="submit" value="" id="search-btn">
				</form>
			</li>  -->
	       
	    </ul>
	</div>
 

		<div class="collapse navbar-collapse">
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
					<li class="col-md-3 full id-container">
						<a href="/register" class="id-buttons">Registrarse</a>
					</li>
					<li class="col-md-3 full id-container">
						<a href="#" onclick="inked.Common.Header.onClickLogin(event)" class="id-buttons">Ingresar</a>
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
	</div>




</header>	




