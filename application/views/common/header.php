<header id="site-header" class="full-header navbar navbar-default">
	<div class="container">
		<div class="row">

		    <!-- burger -->
			<div class="navbar-header">
				 <button class="navbar-toggle collapsed menu-toggle" id="menu-toggle">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
		    </div>

		    <!-- sidebar menu -->
		    <div id="sidebar-wrapper" class="menu-toggle">
			    <ul class="sidebar-nav ">


			    	<li>
						<a href="#" class="id-buttons" data-toggle="modal" data-target="#modal-login">Ingresar</a>
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

				</ul>
			</div>
 
			<!-- default menu -->
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

							<a href="#" class="id-buttons" data-toggle="modal" data-target="#modal-login">Ingresar</a>

						</li>

					</ul>
				</div>
			</div>


		</div>
	</div>
</header>	




<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
	    <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Ingresar</h4>
	    </div>
      

	    <form method="POST" action="/auth/login" onsubmit="inked.Common.Header.validateForm()">
		   
		    <div class="modal-body">
	        
		        	<div class="form-group">
						<label for="username" class="col-sm-3 control-label">Usuario</label>
						<div class="col-sm-9">
						<input type="text" id="username" class="form-control" placeholder="Usuario" name="username" value=""></div>
					</div>

					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Contraseña</label>
						<div class="col-sm-9">
						<input type="password" class="form-control" id="password" placeholder="Password" name="username"></div>
					</div>
			</div>

			<div class="modal-footer">

			        <input type="submit" id="submit-login" class="btn btn-default btn-block" value="Ingresar" />
			        <a href="#" class="btn btn-primary btn-block">Ingresar con tu cuenta de Facebook</a>
			</div>

        </form>

	</div>
  </div>
</div>







