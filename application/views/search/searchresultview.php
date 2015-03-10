<section id="site-content" class="container">
	<div class="row">
		<!-- left col USERS-->
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<h2>Resultados de artistas</h2>
					<p>Se encontraron <strong>239</strong> artistas para la busqueda <strong>sarasa</strong>. <a href="#">Ver solo artistas</a></p>
				</div>
				<?php var_dump($users) ?>;
				<!-- artist -->
				<article class="col-md-6 pic-sq-grid">
					<div class="inner-pic-sq-grid border-img">
						<a href="#"><img src="assets/img2.jpg" alt="" /></a>
						<div class="artist-details">
							<ul class="owner-container clearfix">
								<li class="owner-pic"><a href="#"><img src="assets/img1.jpg" alt="" /></a></li>
								<li class="owner-detail">
									<h2><a href="#">Nombre</a></h2>
									<p>Ciudad</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<!-- end artist -->

				<!-- artist -->
				<article class="col-md-6 pic-sq-grid">
					<div class="inner-pic-sq-grid border-img">
						<a href="#"><img src="assets/img6.jpg" alt="" /></a>
						<div class="artist-details">
							<ul class="owner-container clearfix">
								<li class="owner-pic"><a href="#"><img src="assets/img1.jpg" alt="" /></a></li>
								<li class="owner-detail">
									<h2><a href="#">Nombre</a></h2>
									<p>Ciudad</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<!-- end artist -->

				<!-- artist -->
				<article class="col-md-6 pic-sq-grid">
					<div class="inner-pic-sq-grid border-img">
						<a href="#"><img src="assets/img4.jpg" alt="" /></a>
						<div class="artist-details">
							<ul class="owner-container clearfix">
								<li class="owner-pic"><a href="#"><img src="assets/img1.jpg" alt="" /></a></li>
								<li class="owner-detail">
									<h2><a href="#">Nombre</a></h2>
									<p>Ciudad</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<!-- end artist -->

				<!-- artist -->
				<article class="col-md-6 pic-sq-grid">
					<div class="inner-pic-sq-grid border-img">
						<a href="#"><img src="assets/img7.jpg" alt="" /></a>
						<div class="artist-details">
							<ul class="owner-container clearfix">
								<li class="owner-pic"><a href="#"><img src="assets/img1.jpg" alt="" /></a></li>
								<li class="owner-detail">
									<h2><a href="#">Nombre</a></h2>
									<p>Ciudad</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<!-- end artist -->

				<!-- artist -->
				<article class="col-md-6 pic-sq-grid">
					<div class="inner-pic-sq-grid border-img">
						<a href="#"><img src="assets/img3.jpg" alt="" /></a>
						<div class="artist-details">
							<ul class="owner-container clearfix">
								<li class="owner-pic"><a href="#"><img src="assets/img1.jpg" alt="" /></a></li>
								<li class="owner-detail">
									<h2><a href="#">Nombre</a></h2>
									<p>Ciudad</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<!-- end artist -->

				<!-- artist -->
				<article class="col-md-6 pic-sq-grid">
					<div class="inner-pic-sq-grid border-img">
						<a href="#"><img src="assets/img9.jpg" alt="" /></a>
						<div class="artist-details">
							<ul class="owner-container clearfix">
								<li class="owner-pic"><a href="#"><img src="assets/img1.jpg" alt="" /></a></li>
								<li class="owner-detail">
									<h2><a href="#">Nombre</a></h2>
									<p>Ciudad</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<!-- end artist -->

				<!-- artist -->
				<article class="col-md-6 pic-sq-grid">
					<div class="inner-pic-sq-grid border-img">
						<a href="#"><img src="assets/img1.jpg" alt="" /></a>
						<div class="artist-details">
							<ul class="owner-container clearfix">
								<li class="owner-pic"><a href="#"><img src="assets/img1.jpg" alt="" /></a></li>
								<li class="owner-detail">
									<h2><a href="#">Nombre</a></h2>
									<p>Ciudad</p>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<!-- end artist -->

				<div class="col-md-12 full">
					<button class="btn" id="home-more">VER MAS</button>
				</div>
				
			</div>
		</div>
		<!-- end left col -->


		<!-- right col PHOTOS-->
		<div class="col-md-6 divider-artists-photos">
			<div class="row">
				
				<div class="col-md-12">
					<h2>Resultados de fotos</h2>
					<?php 
					if(empty($photos))
					{
					?>
					<p>No se encontraron fotos para la busqueda <strong><?php echo $search ?></strong>.
					<?php
					}
					else
					{
					?>
					<p>Se encontraron <strong><?php echo sizeof($photos)?></strong> fotos para la busqueda <strong><?php echo $search ?></strong>. <a href="#">Ver solo fotos</a></p>
					<?php
					}
					?>
					
				</div>

				<?php
				$odd = '';
				$even = '';
				if(!empty($photos))
				{
					for ($i = 0; $i < sizeof($photos); $i++) 
					{ 
						if(($i % 2) == 0)
						{
							$even .= '<article class="pic-sq-grid">
								<div class="inner-pic-sq-grid border-img">
									<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
										<img src="'.$photos[$i]['photo'].'" alt="'.$photos[$i]['description'].'" />
									</a>
									<div class="pic-details pic-details-block">
										<p class="caption">'.$photos[$i]['description'].'</p>
										<ul class="owner-container clearfix">
											<li class="owner-pic"><a href="/profile/'.$photos[$i]['user_id'].'"><img src="'.$photos[$i]['profile_photo'].'" alt="" /></a></li>
											<li class="owner-detail">
												<h2><a href="/profile/'.$photos[$i]['user_id'].'">'.$photos[$i]['name'].' '.$photos[$i]['last_name'].'</a></h2>
												<p>'.$photos[$i]['province'].', '.$photos[$i]['city'].'</p>
											</li>
										</ul>
									</div>
								</div>
							</article>';
						}
						else
						{
							$odd .= '<article class="pic-sq-grid">
								<div class="inner-pic-sq-grid border-img">
									<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
										<img src="'.$photos[$i]['photo'].'" alt="'.$photos[$i]['description'].'" />
									</a>
									<div class="pic-details pic-details-block">
										<p class="caption">'.$photos[$i]['description'].'</p>
										<ul class="owner-container clearfix">
											<li class="owner-pic"><a href="/profile/'.$photos[$i]['user_id'].'"><img src="'.$photos[$i]['profile_photo'].'" alt="" /></a></li>
											<li class="owner-detail">
												<h2><a href="/profile/'.$photos[$i]['user_id'].'">'.$photos[$i]['name'].' '.$photos[$i]['last_name'].'</a></h2>
												<p>'.$photos[$i]['province'].', '.$photos[$i]['city'].'</p>
											</li>
										</ul>
									</div>
								</div>
							</article>';
						}

					}//END FOR
				}//END IF

				/*
				var_dump($photos);
				var_dump($odd);
				var_dump($even);
				*/
				?>

				<!-- left col fotos -->
				<div class="col-md-6">
						
					<?php
						echo $odd;
					?>
					
				</div>
				<!-- end left col foto -->

				<!-- right col fotos -->
				<div class="col-md-6">
					
					<?php 
						echo $even;
					?>	


				</div>
				<!-- end right col foto -->

				<div class="col-md-12 full">
					<button class="btn" id="home-more">VER MAS</button>
				</div>

			</div>
		</div>
			<!-- end right col -->
		
	</div>
</section>