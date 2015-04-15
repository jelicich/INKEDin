<article class="col-md-9" id="profile-mid-col">
	<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
	<h2 class="profile-section">Albumes</h2>
	<div class="row">	
	<?php
	for ($i=0; $i < sizeof($albums); $i++) 
	{ 
		if(empty($albums[$i]['photo']))
		{
			$path = '/assets/common/app/img/default_album.jpg';
			$content = '<h3>' . $albums[$i]['name'] .' <em>(Vacio)</em></h3><img src="'.$path.'" alt="'. $albums[$i]['name'].'" class="album-cover"/>';
		}
		else
		{
			$path = '/users/'.$albums[$i]['user_id'].'/img/sm/'.$albums[$i]['photo'];
			$content = '<a href="/profile/' . $albums[$i]['user_id'] . '/album/' . $albums[$i]['id'] . '" class="album-anchor"><h3>'. $albums[$i]['name'] .'</h3><img src="'. $path .'" alt="'. $albums[$i]['name'] .'" class="album-cover"/></a>';
		}
	?>
		<div class="col-md-4 pic-sq-grid">
			<div class="inner-pic-sq-grid border-img album-container">
				<?php echo $content ?>
			</div>
		</div>
	<?php
	}
	?>
	</div>
</article>