<section id="site-content" class="container">
	<div class="row">
		<!-- left col USERS-->
		<div class="col-md-6">
			<div class="row" id="users-result-container" data-column-width='6'>
				<div class="col-md-12">
					<h2>Resultados de artistas</h2>
					<?php 
					if(empty($users))
					{
					?>
					<p>No se encontraron artistas para la busqueda <strong><?php echo $search ?></strong>.</p>
					<?php
					}
					else
					{
					?>
					<p>Se encontraron <strong><?php echo $count_users ?></strong> artistas para la busqueda <strong><?php echo $search ?></strong>. <a href="/search/artists/<?php echo $search ?>">Ver solo artistas</a></p>
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
								<a href="/profile/<?php echo $users[$i]['id']?>"><img src="<?php echo $users[$i]['photo'] ?>" alt="" /></a>
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
				
				<div class="col-md-12">
					<button class="btn btn-default" id="load-more-users" onclick="inked.Search.loadMoreUsers()" data-query="<?php echo $search ?>">VER MAS</button>
				</div>
				<?php
				}//END IF

				?>
				
				
				
			</div>
		</div>
		<!-- end left col -->


		<!-- right col PHOTOS-->
		<div class="col-md-6 divider-artists-photos">
			<div class="row" id="photos-result-container" data-column-number="2">
				
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
					<p>Se encontraron <strong><?php echo $count_photos ?></strong> fotos para la busqueda <strong><?php echo $search ?></strong>. <a href="/search/photos/<?php echo $search ?>">Ver solo fotos</a></p>
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
						
						$html = '<article class="pic-sq-grid">
								<div class="inner-pic-sq-grid border-img">
									<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
										<img src="'.$photos[$i]['photo'].'" alt="'.$photos[$i]['description'].'" data-tags="'.$photos[$i]['tags'].'"/>
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
						if(($i % 2) == 0)
						{
							$even .= $html;
						}
						else
						{
							$odd .= $html;
						}

					}//END FOR
				}//END IF

				?>

				<!-- left col fotos -->
				<div class="col-md-6" id="left-col-photos">
						
					<?php
						echo $even;
					?>
					
				</div>
				<!-- end left col foto -->

				<!-- right col fotos -->
				<div class="col-md-6" id="right-col-photos">
					
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
						<button class="btn btn-default" id="load-more-photos" onclick="inked.Search.loadMorePhotos()" data-query="<?php echo $search ?>">Ver mas</button>
					</div>
				<?php
				}
				?>
			</div>
		</div>
			<!-- end right col -->
		
	</div>
</section>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="" id="photo-target" class="img-responsive">
            <div class="modal-tools">
           		<p id="photo-description"></p>
           		<p class="photo-tags"><strong>Tags:</strong> <span id="photo-tags"></span></p>
           		<div id="photo-owner-info"></div>
           		<a href="#" class="btn btn-default btn-save-photo">Guardar <span class="glyphicon glyphicon-picture"></span></a>
            </div>
        </div>
    </div>
  </div>
</div>