
<article class="col-md-9" id="profile-mid-col">
	<h1><?php var_dump($comments);  echo $profile['name'].' '.$profile['last_name']?></h1>
	<h2 class="profile-section">Comments</h2>
	<div class="row">	
	<ul>
		<?php 
			for ($i=0; $i < sizeof($comments); $i++) { 
		?>
				<li><?php echo $comments[$i]['comment']; ?></li>
	 	<?php 
	     	}	
		?>
	</ul>
	</div>
</article>