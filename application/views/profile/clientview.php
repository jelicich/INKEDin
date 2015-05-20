<div class="col-md-9 client-mid" id="profile-mid-col">
	<div class="name-profile clearfix">
		<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
		<div class="fb-like" data-href="/profile/<?php echo $profile['id']?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
	</div>
</div>


<?php
$col1 = '';
$col2 = '';
$col3 = '';
$col4 = '';
$count = 1;

if(!empty($photos))
{
	for ($i = 0; $i < sizeof($photos); $i++) 
	{
		if($count > 3)
		{
			$count = 1;
		}
		$location = $photos[$i]['province'];
		if(!empty($photos[$i]['city']))
		{
			$location .= ', '.$photos[$i]['city'];
		}
		
		$html = '<article class="pic-sq-grid client-dates">
			<div class="inner-pic-sq-grid border-img">
				<a href="#" class="photo-anchor photo-client" data-toggle="modal" data-target="#myModal">
					<img src="/users/'.$photos[$i]['owner_id'].'/img/thumb/'.$photos[$i]['photo'].'" alt="'.$photos[$i]['description'].'" data-tags="'.$photos[$i]['tags'].'" data-photo-id="'.$photos[$i]['photo_id'].'" class="photo-album"/>
				</a>
				<div class="pic-details pic-details-block clearfix">
					<p class="caption">'.$photos[$i]['description'].'</p>
					<ul class="owner-container clearfix">
						<li class="owner-pic"><a href="/profile/'.$photos[$i]['owner_id'].'"><img src="'.$photos[$i]['profile_photo'].'" alt="" /></a></li>
						<li class="owner-detail">
							<h2><a href="/profile/'.$photos[$i]['owner_id'].'">'.$photos[$i]['name'].' '.$photos[$i]['last_name'].'</a></h2>
							<p>'.$location.'</p>
						</li>
					</ul>
					<span class="date-format">'.Helper_Datetime::date_format($photos[$i]['photo-date']).'</span>
					<p class="fav-date date-format">
						Guardada el '.Helper_Datetime::date_format($photos[$i]['date']).'
					</p>
				</div>
			</div>
		</article>';
		
		switch ($count) 
		{
			case 1:
				$col1 .= $html;
				break;

			case 2:
				$col2 .= $html;
				break;

			case 3:
				$col3 .= $html;
				break;

		}
		$count++;
	}//END FOR
}//END IF
?>
<div class="col-lg-9 col-md-8 col-sm-12">
	<div class="row" id="photos-album-container">
		<div class="col-md-4 col-sm-4">
			<?php echo $col1; ?> 
		</div>
		<div class="col-md-4 col-sm-4">
			<?php echo $col2; ?> 
		</div>
		<div class="col-md-4 col-sm-4">
			<?php echo $col3; ?> 
		</div>
		
	</div>
</div>
	

