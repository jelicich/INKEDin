<!doctype html>
<html>
<head>
	<?php echo $head ?>

	<!-- Load here view specific css and scripts -->


</head>

<body class="inked homeview">

<div id="wrapper">
	<!-- header-->
	<?php echo $header; ?>
	<!-- end header-->


	<!-- content -->
	<section id="site-content" class="container">
		<div class="row">
			<!-- left col -->
			<div class="col-md-6">
				<div class="row" id="left-col-photos">
					<?php 
					if(!empty($leftcol))
					{
						$l_count = 1;
						for($i = 0; $i < sizeof($leftcol); $i++)
						{
							if($l_count > 5)
							{
								$l_count = 1;
							}
							if($l_count == 1)
							{
								$col_size = 12;
							}
							else
							{
								$col_size = 6;
							}
							$location = $leftcol[$i]['province'];
							if(!empty($leftcol[$i]['city']))
							{
								$location .= ', '.$leftcol[$i]['city'];
							}
						?>	
						
							<!-- img -->
							<article class="col-md-<?php echo $col_size ?> pic-sq-grid">
								<div class="inner-pic-sq-grid border-img">
									<a href="#"><img src="<?php echo $leftcol[$i]['photo'] ?>" alt="<?php echo $leftcol[$i]['description'] ?>" /></a>
									<div class="pic-details">
										<p class="caption"><?php echo $leftcol[$i]['description'] ?></p>
										<ul class="owner-container clearfix">
											<li class="owner-pic"><a href="/profile/<?php echo $leftcol[$i]['user_id'] ?>"><img src="<?php echo $leftcol[$i]['profile_photo'] ?>" alt="<?php echo $leftcol[$i]['name'] .' '. $leftcol[$i]['last_name'] ?> ?>" /></a></li>
											<li class="owner-detail">
												<h2><a href="/profile/<?php echo $leftcol[$i]['user_id'] ?>"><?php echo $leftcol[$i]['name'] .' '. $leftcol[$i]['last_name'] ?></a></h2>
												<p><?php echo $location ?></p>
											</li>
										</ul>
									</div>
								</div>
							</article>
							<!-- end img -->
						<?php 
							$l_count++;
						}//end for
					}//end if
					?>	
					
					
				</div>
			</div>
			<!-- end left col -->


			<!-- right col -->
			<div class="col-md-6">
				<div class="row" id="right-col-photos">
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
					

					
				</div>
			</div>
				<!-- end right col -->
			<div class="col-md-12 full">
				<button class="btn btn-default" id="load-more-photos" onclick="inked.Home.loadMorePhotos()">VER MAS</button>
			</div>
		</div>
	</section>
	<!-- end content -->
	<?php echo $footer ?>
	
</div>
</body>
</html>