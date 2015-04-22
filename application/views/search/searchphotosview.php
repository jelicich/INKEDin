<!-- content -->
	<section id="site-content" class="container">
		<div class="row">			

			<div class="col-md-12">
			 
			 <button class="btn btn-toggler" data-toggle="collapse" data-target="#section-results-box"><span class="glyphicon glyphicon-search">&nbsp;</span> Buscar Fotos</button>
	      

				<div id="section-results-box" class="row bg collapse"  data-column-number="4">
					<div class="col-md-6">
						<h2>Resultados de fotos</h2>
						<?php 
						if(empty($photos))
						{
						?>
						<p>No se encontraron fotos para la busqueda <strong><?php echo $search ?></strong>.</p>
						<?php
						}
						else
						{
							if(empty($search))
							{
						?>
								<p>Se encontraron <strong><?php echo $count_photos ?></strong> fotos.</p>		
						<?php
							}
							else
							{
						?>
								<p>Se encontraron <strong><?php echo $count_photos ?></strong> fotos para la busqueda <strong><?php echo $search ?></strong>.</p>
						<?php 		
							}
						}
						?>
					</div>

					<div class="col-md-6">
						<h2>Buscar fotos</h2>
						<form method="get" onsubmit="inked.Search.buildUrlPhotos(event)">
							<input type="text" name="search-photos" class="input-search" value="<?php echo $search ?>"/>
							<input type="submit" value="Buscar" class="btn btn-default btn-sm" />
						</form>
					</div>
				</div>
			</div>
			
			<?php
			$col1 = '';
			$col2 = '';
			$col3 = '';
			$col4 = '';
			$count = 1;
			if(!empty($photos))
			{
				for ($i = 0; $i < sizeof($photos); $i++) 
				{
					if($count > 4)
					{
						$count = 1;
					}
					$location = $photos[$i]['province'];
					if(!empty($photos[$i]['city']))
					{
						$location .= ', '.$photos[$i]['city'];
					}
					
					$html = '<article class="pic-sq-grid">
							<div class="inner-pic-sq-grid border-img">
								<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
									<img src="'.$photos[$i]['photo'].'" alt="'.$photos[$i]['description'].'" data-tags="'.$photos[$i]['tags'].'" data-photo-id="'.$photos[$i]['id'].'"/>
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
					
					switch ($count) 
					{
						case 1:
							$col1 .= $html;
							break;

						case 2:
							$col2 .= $html;
							break;

						case 3:
							$col3 .= $html;
							break;

						case 4:
							$col4 .= $html;
							break;
					}
					$count++;
				}//END FOR
			}//END IF

			?>
			<!--COL 1-->
			<div class="col-md-3" id="first-col-photos">
				
				<?php echo $col1?>

			</div>
			<!-- END COL 1 -->

			<!--COL 2-->
			<div class="col-md-3" id="second-col-photos">
				
				<?php echo $col2?>

			</div>
			<!-- END COL 2 -->

			<!--COL 3-->
			<div class="col-md-3" id="third-col-photos">
				
				<?php echo $col3?>

			</div>
			<!-- END COL 3 -->

			<!--COL 4-->
			<div class="col-md-3" id="fourth-col-photos">
				
				<?php echo $col4?>

			</div>
			<!-- END COL 4 -->
			<?php
			if(!empty($photos))
			{
			?>
				<div class="col-md-12">
					<button class="btn btn-default" id="load-more-photos" onclick="inked.Search.loadMorePhotos()" data-query="<?php echo $search ?>">VER MAS</button>
				</div>
			<?php
			}
			?>
		</div>
	</section>
	<!-- end content -->