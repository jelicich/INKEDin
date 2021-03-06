
<header id="site-header" class="full-header navbar navbar-default">
	<div class="container">
		<div class="row">

			<!-- sidebar menu -->
		    <div id="sidebar-wrapper">
			    <ul class="sidebar-nav ">
			    	<li>
			    		<ul id="site-tools-mobile">
			    		
				    		<li>
								<a href="/register">Registrarse</a>
							</li>

					    	<li>
								<a href="#" data-toggle="modal" data-target="#modal-login">Ingresar</a>
							</li>

				    	</ul>
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

			        <li>
			        	<form method="GET" action="/search/" onsubmit="inked.Common.Header.buildUrl(event)" class="col-md-10">
							
							<?php 
								if(!isset($search))
									$search = '';
							?>

							<input type="text" value="" placeholder="Buscar..." class="form-control search-mobile" <?php echo $search; ?> >
							<input type="submit" value="Buscar" class="btn btn-default btn-sm btn-block">
						</form>
					</li> 

				</ul>
			</div>
 
			<!-- default menu -->
			<div class="col-md-5 col-sm-5 full">
				<div class="collapse navbar-collapse">
					
					<nav>
						<ul class="clearfix">
							<li><a href="/search/photos/">Tatuajes</a></li>
							<li><a href="/search/artists/">Artistas</a></li>
							<li><a href="/search/tops/">Tops</a></li>
						</ul>
					</nav>

				</div>
			</div>

			<div class="col-md-2 col-sm-2 clearfix mob-btn-logo">

				<!-- burger -->
				<div class="navbar-header">
					 <button class="navbar-toggle collapsed menu-toggle" id="menu-toggle">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
			    </div>

			    <h1 id="site-logo">
					<a href="/">
						<img src="/assets/common/app/img/inkedin-logo.png" alt="INKEDin">
					</a>
				</h1>
			</div>

			<!-- default log reg -->
			<div class="col-md-5 col-sm-5 full">
				<div class="collapse navbar-collapse">
					
					<div id="site-tools">
						<ul class="clearfix row">
							
							<li id="search-box" class="col-md-6 full">
								<form method="GET" action="/search/" onsubmit="inked.Common.Header.buildUrl(event)" id="search-form">
									<?php 
									if(!isset($search))
										$search = '';
									?>
									<input type="text" id="search-input" value="<?php echo $search ?>">
									<input type="submit" value="">
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
	</div>
</header>	


<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
	    <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Ingresar</h4>
	    </div>
      
		<div class="modal-body">
	        	
	        	<form method="POST" action="/auth/login" onsubmit="inked.Common.Header.validateForm(event)" class="clearfix">
		        	<div class="form-group">
						<label for="username" class="col-sm-3 control-label">E-mail</label>
						<div class="col-sm-9">
						<input type="text" id="username" class="form-control" placeholder="E-mail" name="username" value=""></div>
					</div>

					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Contraseña</label>
						<div class="col-sm-9">
						<input type="password" class="form-control" id="password" placeholder="Contraseña" name="password"></div>
					</div>
			

			        <input type="submit" id="submit-login" class="btn btn-default btn-block" value="Ingresar" />
			     
			     </form>

			     <a href="#" class="btn btn-primary btn-block" onclick="inked.Common.Header.fb_login();">Ingresar con tu cuenta de Facebook</a>
			     <!--
			     <fb:login-button scope="public_profile,email" onlogin="inked.Common.Header.checkLoginState();" data-size="xlarge">
				 </fb:login-button>
				  -->
				 <div id="status">
				 </div>
				 <div id="fb-root">
				 </div>

		</div>

     </div>
  </div>
</div>







