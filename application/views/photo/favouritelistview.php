<div class="favourites-container">
	<h3>Fotos guardadas</h3>
		<div class="row">
			<?php
			for($i = 0; $i < sizeof($photos); $i++)
			{
				$location = $photos[$i]['province'];
				if(!empty($photos[$i]['city']))
				{
					$location .= ', '.$photos[$i]['city'];
				}
			?>
				<article class="pic-sq-grid">
					<div class="inner-pic-sq-grid border-img">
						<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
							<img src="<?php echo '/users/'.$photos['user_id'].'/img/sm/'.$photos[$i]['photo'] ?>" alt="<?php echo $photos[$i]['description'] ?>" data-tags="<?php echo $photos[$i]['tags'] ?>"/>
						</a>
						<div class="pic-details pic-details-block">
							<p class="caption"><?php echo $photos[$i]['description'] ?></p>
							<ul class="owner-container clearfix">
								<li class="owner-pic"><a href="/profile/<?php echo $photos[$i]['user_id'] ?>"><img src="<?php echo $photos[$i]['profile_photo'] ?>" alt="" /></a></li>
								<li class="owner-detail">
									<h2><a href="/profile/<?php echo $photos[$i]['user_id'] ?>"><?php echo $photos[$i]['name'].' '.$photos[$i]['last_name'] ?></a></h2>
									<p><?php echo $location ?></p>
								</li>
							</ul>
						</div>
					</div>
				</article>
			<?php
			}
			?>
		</div>		
		
							
</div>



<!-- AJAX MSG CONTAINER -->
<div id="favourites-edit-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->