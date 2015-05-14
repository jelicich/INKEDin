<!-- content -->
<section id="site-content" class="container">
	<div class="row" id="users-result-container" data-column-width='3'>
		
		<div class="col-md-12">
			
			<div class="clearfix header-search">
				<div class="clearfix">
					<div class="clearfix">

					    <h2>Resultados de artistas:</h2>
						<?php 
						if(empty($users))
						{
						?>
						<p>No se encontraron artistas para la busqueda <strong><?php echo $search ?></strong>.</p>
						<?php
						}
						else
						{
							if(empty($search))
							{
						?>
								<p>Se encontraron <strong><?php echo $count_users ?></strong> artistas registrados.</p>		
						<?php
							}
							else
							{
						?>
								<p>Se encontraron <strong><?php echo $count_users ?></strong> artistas para la busqueda <strong><?php echo $search ?></strong>.</p>
						<?php 		
							}
						}
						?>
					</div>
					<button class="btn btn-toggler" data-toggle="collapse" data-target="#section-results-box"><span class="glyphicon glyphicon-search">&nbsp;</span> Buscar artistas</button>	
				</div>
				
				
			</div>
		  
	      
	      <div id="section-results-box" class="collapse artists-box">
				<div class="clearfix bg">
					<h2>Buscá artistas por localidad, estilos o nombre</h2>
					<form method="get" class="artists-filter" onsubmit="inked.Search.buildUrlArtists(event)">
						<ul id="search-user-filters" class="clearfix">
							<li>
								<label for="province">Provincia</label>
								<select name="province" id="province" onchange="inked.Search.getCities(event)" class="input-search input-search-sm">
									<option></option>
									<?php
									for($i = 0; $i < sizeof($provinces); $i++)
									{	
										if($provinces[$i]['id'] == $province)
										{
											echo '<option value="'.$provinces[$i]['id'].'" selected>'.$provinces[$i]['province'].'</option>';
										}
										else
										{
											echo '<option value="'.$provinces[$i]['id'].'">'.$provinces[$i]['province'].'</option>';
										}
									}
									?>
								</select>
							</li>
							<li>
								<label for="city">Ciudad</label>
								<select name="city" id="city" class="input-search input-search-sm">
									<option></option>
									<?php 
									if(!empty($cities))
									{
										for($i = 0; $i < sizeof($cities); $i++)
										{
											if($cities[$i]['id'] == $city)
											{
												echo '<option value="'.$cities[$i]['id'].'" selected>'.$cities[$i]['city'].'</option>';
											}
											else
											{
												echo '<option value="'.$cities[$i]['id'].'">'.$cities[$i]['city'].'</option>';
											}	
										}
									}
									?>
								</select>
							</li>
							<li>
								<input type="text" name="search-artists" placeholder=" Buscar..." class="input-search input-search-sm" value="<?php echo $search ?>"/>
								<input type="submit" value="Buscar" class="btn btn-default btn-sm" />
							</li>
						</ul>

						
						
					</form>
				</div>
				
			</div>
		</div>

		<?php 
		if(!empty($users))
		{
			for ($i = 0; $i < sizeof($users); $i++) 
			{ 
		?>
			<!-- artist -->
			<article class="col-md-3 pic-sq-grid">
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
		}
		
		if(!empty($users))
		{
		?>

		<div class="col-md-12">
			<button class="btn btn-default" id="load-more-users" onclick="inked.Search.loadMoreUsers()" data-query="<?php echo $search ?>">VER MAS</button>
		</div>
		<?php
		}
		?>
	</div>
</section>
<!-- end content -->