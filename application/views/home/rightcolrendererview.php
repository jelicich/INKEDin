<?php
if(!empty($rightcol))
{
	$r_count = 1;
	for($i = 0; $i < sizeof($rightcol); $i++)
	{
		if($r_count > 5)
		{
			$r_count = 1;
		}
		if($r_count == 3)
		{
			$col_size = 12;
		}
		else
		{
			$col_size = 6;
		}
		$location = $rightcol[$i]['province'];
		if(!empty($rightcol[$i]['city']))
		{
			$location .= ', '.$rightcol[$i]['city'];
		}
	?>	
	
		<!-- img -->
		<article class="col-md-<?php echo $col_size ?> pic-sq-grid">
			<div class="inner-pic-sq-grid border-img">
				<a href="#"><img src="<?php echo $rightcol[$i]['photo'] ?>" alt="<?php echo $rightcol[$i]['description'] ?>" /></a>
				<div class="pic-details">
					<p class="caption"><?php echo $rightcol[$i]['description'] ?></p>
					<ul class="owner-container clearfix">
						<li class="owner-pic"><a href="/profile/<?php echo $rightcol[$i]['user_id'] ?>"><img src="<?php echo $rightcol[$i]['profile_photo'] ?>" alt="<?php echo $rightcol[$i]['name'] .' '. $rightcol[$i]['last_name'] ?> ?>" /></a></li>
						<li class="owner-detail">
							<h2><a href="/profile/<?php echo $rightcol[$i]['user_id'] ?>"><?php echo $rightcol[$i]['name'] .' '. $rightcol[$i]['last_name'] ?></a></h2>
							<p><?php echo $location ?></p>
						</li>
					</ul>
				</div>
			</div>
		</article>
		<!-- end img -->
	<?php 
		$r_count++;
	}//end for
}//end if
?>