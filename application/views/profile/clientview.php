<div class="col-md-9" id="profile-mid-col">
	<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
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
		if($count > 4)
		{
			$count = 1;
		}
		$location = $photos[$i]['province'];
		if(!empty($photos[$i]['city']))
		{
			$location .= ', '.$photos[$i]['city'];
		}
		
		$html = '<article class="col-md-3 pic-sq-grid fav-container">
			<div class="inner-pic-sq-grid border-img">
				<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
					<img src="/users/'.$photos[$i]['owner_id'].'/img/thumb/'.$photos[$i]['photo'].'" alt="'.$photos[$i]['description'].'" data-tags="'.$photos[$i]['tags'].'" data-photo-id="'.$photos[$i]['photo_id'].'"/>
				</a>
				<div class="pic-details pic-details-block">
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

			case 4:
				$col4 .= $html;
				break;
		}
		$count++;
	}//END FOR
}//END IF

echo $col1;
echo $col2;
echo $col3;
echo $col4;

?>