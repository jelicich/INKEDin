<section id="site-content" class="container">
	<div class="row">
		<!-- left col USERS-->
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12">
					<h2>Resultados de artistas</h2>
					<?php 
					if(empty($users))
					{
					?>
					<p>No se encontraron artistas para la busqueda <strong><?php echo $search ?></strong>.
					<?php
					}
					else
					{
					?>
					<p>Se encontraron <strong><?php echo sizeof($users)?></strong> artistas para la busqueda <strong><?php echo $search ?></strong>. <a href="#">Ver solo artistas</a></p>
					<?php
					}
					?>
				</div>
				

				<?php 
				if(!empty($users))
				{
					for ($i = 0; $i < sizeof($users); $i++) 
					{ 
				?>
					<!-- artist -->
					<article class="col-md-6 pic-sq-grid">
						<div class="inner-pic-sq-grid border-img">
							<a href="#"><img src="<?php echo $users[$i]['photo'] ?>" alt="" /></a>
							<div class="artist-details">
								<div class="owner-container clearfix">
									<div class="owner-detail">
										<h2><a href="/profile/<?php echo $users[$i]['id']?>"><?php echo $users[$i]['name'].' '.$users[$i]['last_name']?></a></h2>
										<p>
										<?php 
										echo $users[$i]['province'];
										if(!empty($users[$i]['city']))
										{
											echo ', '.$users[$i]['city'];
										}
										?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</article>	
					<!-- end artist -->	

				<?php 		
					}//END FOR
				?>
				<div class="col-md-12 full">
					<button class="btn" id="home-more">VER MAS</button>
				</div>
				<?php
				}//END IF

				?>
				
				
				
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
						$location = $photos[$i]['province'];
						if(!empty($photos[$i]['city']))
						{
							$location .= ', '.$photos[$i]['city'];
						}
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
												<p>'.$location.'</p>
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
												<p>'.$location.'</p>
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
						echo $even;
					?>
					
				</div>
				<!-- end left col foto -->

				<!-- right col fotos -->
				<div class="col-md-6">
					
					<?php 
						echo $odd;
					?>	


				</div>
				<!-- end right col foto -->
				<?php
				if(!empty($photos))
				{
				?>
					<div class="col-md-12 full">
						<button class="btn" id="home-more">VER MAS</button>
					</div>
				<?php
				}
				?>
			</div>
		</div>
			<!-- end right col -->
		
	</div>
</section>