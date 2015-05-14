<?php 
if(!empty($users))
{
	for ($i = 0; $i < sizeof($users); $i++) 
	{ 
?>
	<!-- artist -->
	<article class="col-md-<?php echo $cw ?> col-sm-4 pic-sq-grid">
		<div class="inner-pic-sq-grid border-img">
			<a href="#"><img src="<?php echo $users[$i]['photo'] ?>" alt="" /></a>
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
		</div>
	</article>	
	<!-- end artist -->	

<?php 		
	}//END FOR

}//END IF
?>