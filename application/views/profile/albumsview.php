<article class="col-md-9" id="profile-mid-col">
	<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
	<h2 class="profile-section">Albumes</h2>
	<div class="row">	
	<?php
	for ($i=0; $i < sizeof($albums); $i++) 
	{ 
	?>
		<div class="col-md-4 pic-sq-grid">
			<div class="inner-pic-sq-grid border-img album-container">
				<a href="/profile/<?php echo $albums[$i]['user_id']?>/album/<?php echo $albums[$i]['id']?>" class="album-anchor">
					<h3><?php echo $albums[$i]['name'] ?></h3>
					<img src="<?php echo '/users/'.$albums[$i]['user_id'].'/img/sm/'.$albums[$i]['photo']?>" alt="<?php echo $albums[$i]['name'] ?>" class="album-cover"/>					
				</a>
			</div>
		</div>
	<?php
	}
	?>
	</div>
</article>