<!-- content -->
<section id="site-content" class="container">
	<div class="row" id="users-result-container" data-column-width='3'>
		
		<div class="col-md-12">
			<div class="row" >
				<div class="col-md-12">
					<h2>Top 50</h2>
					<p>Mostrando los mejores 50 artistas del sitio</p>
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
			<article class="col-md-3 pic-sq-grid top-artist">
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
					<div class="rating rate">
						<span><?php echo @round($users[$i]['rating'],1) ?></span>
					</div>
					<p class="total-votes"><?php echo $users[$i]['total_votes'] ?> votos</p>
				</div>
			</article>	
			<!-- end artist -->	

		<?php 		
			}//END FOR
		}
		?>
	</div>
</section>
<!-- end content -->