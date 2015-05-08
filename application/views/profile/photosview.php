<article class="col-md-9" id="profile-mid-col">
	<div class="name-profile clearfix">
		<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
		<div class="fb-like" data-href="/profile/<?php echo $profile['id']?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
	</div>
	<h2 class="profile-section"><?php echo $photos[0]['name']; ?></h2>
	
	<div class="row">	
	<?php
	for ($i=0; $i < sizeof($photos); $i++) 
	{ 
	?>
		<div class="col-md-4 pic-sq-grid">
			<div class="inner-pic-sq-grid border-img">
				<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
					<img src="<?php echo '/users/'.$photos[$i]['user_id'].'/img/sm/'.$photos[$i]['photo']?>" alt="<?php echo $photos[$i]['description'] ?>" class="photo-edit-album" data-photo-id="<?php echo $photos[$i]['id']?>" data-tags="<?php echo $photos[$i]['tags']?>"/>
				</a>
				<div class="hidden">
					<div class="pic-details pic-details-block cp">
						<p class="caption"><?php echo $photos[$i]['description'] ?></p>
						<span class="date-format"><?php echo Helper_Datetime::date_format($photos[$i]['date']) ?></span>
					</div>
				</div>
			</div>
		</div>
	<?php 
	}
	?>
	</div>
</article>

