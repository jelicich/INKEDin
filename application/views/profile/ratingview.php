
	

	<div class="ratings clearfix">
		<div class="rating rate">
			<span><?php echo @round($rating['total'],1) ?></span>
		</div>
		<div class="rating stars">
			<ol id="rating_<?php echo $profile_id ?>" class="clearfix rating-scale">
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
					echo '<li class="'.$class.'"></li>';
				}
				?>
			</ol>
			<span class="total-votes"><?php echo $rating['total_votes'] ?> persona(s) votaron</span>
			<?php
			if(isset($feedback))
			{
				echo '<p class="rating-feedback">'.$feedback.'</p>';
			}
			else
			{
				echo '<p class="rating-feedback">Calificá a este artista</p>';	
			}
			?>
			
			
		</div>
	</div>

	

