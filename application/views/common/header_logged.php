<header id="site-header" class="full-header navbar navbar-default">
	<div class="container">
		<div class="row">

			<!-- sidebar menu -->
		    <div id="sidebar-wrapper" class="menu-toggle">
			    <ul class="sidebar-nav ">

			    	<ul id="site-tools-mobile">
			    		
			    		<li>
							<a href="/register">Registrarse</a>
						</li>

				    	<li>
							<a href="#" data-toggle="modal" data-target="#modal-login">Ingresar</a>
						</li>

					<!-- 	<li  class="col-md-6 full">
								
								<form method="GET" action="/search/" onsubmit="inked.Common.Header.buildUrl(event)" id="search-form">
									<?php 
									if(!isset($search))
										$search = '';
									?>
									<input type="text" id="search-input" value="<?php echo $search ?>">
									<input type="submit" value="" id="search-btn">
								</form>
						</li> -->

			    	</ul>

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
			<div class="col-md-5 full">
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

			<div class="col-md-2">

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
						<img src="\assets\common\app\img\inkedin-logo.png">
					</a>
				</h1>
			</div>

			<!-- default log reg -->
			<div class="col-md-5 full">
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
											<li><a href="<?php echo "/message/inbox/"; ?>" >Inbox 
													
														<?php 
															if (isset($messages_amount) && $messages_amount[0]['total_messages'] != 0) {
																
																echo "<span id='messages-alert'>". $messages_amount[0]['total_messages']."</span>";
															}
															 
														?> 
													
												</a>
											</li>
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
	        	
	        	<form method="POST" action="/auth/login" onsubmit="inked.Common.Header.validateForm()">
		        	<div class="form-group">
						<label for="username" class="col-sm-3 control-label">Usuario</label>
						<div class="col-sm-9">
						<input type="text" id="username" class="form-control" placeholder="Usuario" name="username" value=""></div>
					</div>

					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Contraseña</label>
						<div class="col-sm-9">
						<input type="password" class="form-control" id="password" placeholder="Password" name="password"></div>
					</div>
			

			        <input type="submit" id="submit-login" class="btn btn-default btn-block" value="Ingresar" />
			     
			     </form>

			     <a href="#" class="btn btn-primary btn-block">Ingresar con tu cuenta de Facebook</a>

		</div>

     </div>
  </div>
</div>







