<article class="col-md-9" id="profile-mid-col">
	<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
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
			</div>
		</div>
	<?php 
	}
	?>
	</div>
</article>

