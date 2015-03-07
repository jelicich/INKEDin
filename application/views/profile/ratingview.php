<div class="product">
	Rate Item 
	<div id="rating_<?php echo $profile_id ?>" class="ratings">
	<?php
	for($i = 1; $i < 6; $i++)
	{
		if($rating['total']+0.5 > $i)
		{
			$class = "star_".$i."  ratings_stars ratings_vote";
		}
		else 
		{
			$class = "star_".$i." ratings_stars ratings_blank";
		}
		echo '<div class="'.$class.'"></div>';
	}
	?>
		
		<div class="total_votes">
			<p class="voted"> Rating: <strong><?php echo @number_format($rating['total']) ?></strong>/5 (<?php echo $rating['total_votes'] ?> vote(s) cast) </p>
		</div>
		<?php
		if(isset($feedback))
		{
			echo '<div class="rating-feedback><p>'.$feedback.'</p></div>';
		}
		?>
	</div>
</div>

