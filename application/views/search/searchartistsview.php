<!-- content -->
<section id="site-content" class="container">
	<div class="row" id="users-result-container" data-column-width='3'>
		
		<div class="col-md-12">
			<div class="row" >
				<div class="col-md-6">
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
						if(empty($search))
						{
					?>
							<p>Se encontraron <strong><?php echo sizeof($users)?></strong> artistas registrados.</p>		
					<?php
						}
						else
						{
					?>
							<p>Se encontraron <strong><?php echo sizeof($users)?></strong> artistas para la busqueda <strong><?php echo $search ?></strong>.</p>
					<?php 		
						}
					}
					?>
				</div>
				<div class="col-md-6">
					<h2>Buscar artistas</h2>
					<form method="get" class="artists-filter">
						<select name="country">
							<option disabled selected>Pais</option>
							<option value="1">Argentina</option>
						</select>
						<select name="province">
							<option disabled selected>Provincia</option>
							<option value="1">Buenos Aires</option>
							<option value="2">Cordoba</option>
						</select>
						<select name="city">
							<option disabled selected>Ciudad</option>
							<option value="1">Buenos Aires</option>
							<option value="2">Rosario</option>
						</select>
						<input type="text" name="search-artists" class="input-search input-search-sm"/>
						<input type="submit" value="Buscar" class="btn btn-default btn-sm" />
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
		?>

		<div class="col-md-12">
			<button class="btn btn-default" id="load-more-users" onclick="inked.Search.loadMoreUsers()" data-query="<?php echo $search ?>">Ver mas</button>
		</div>
	</div>
</section>
<!-- end content -->