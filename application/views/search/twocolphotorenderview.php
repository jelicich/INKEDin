<?php
$html = '';
if(!empty($photos))
{
	for ($i = 0; $i < sizeof($photos); $i++) 
	{ 
		$location = $photos[$i]['province'];
		if(!empty($photos[$i]['city']))
		{
			$location .= ', '.$photos[$i]['city'];
		}
		if(($i % 2) == $module)
		{
			$html .= '<article class="pic-sq-grid">
				<div class="inner-pic-sq-grid border-img">
					<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
						<img src="'.$photos[$i]['photo'].'" alt="'.$photos[$i]['description'].'" data-tags="'.$photos[$i]['tags'].'" data-photo-id="'.$photos[$i]['id'].'"/>
					</a>
					<div class="pic-details pic-details-block clearfix">
						<p class="caption">'.$photos[$i]['description'].'</p>
						<ul class="owner-container clearfix">
							<li class="owner-pic"><a href="/profile/'.$photos[$i]['user_id'].'"><img src="'.$photos[$i]['profile_photo'].'" alt="" /></a></li>
							<li class="owner-detail">
								<h2><a href="/profile/'.$photos[$i]['user_id'].'">'.$photos[$i]['name'].' '.$photos[$i]['last_name'].'</a></h2>
								<p>'.$location.'</p>
							</li>
						</ul>
						<span class="date-format">'.Helper_Datetime::date_format($photos[$i]['date']).'</span>
					</div>
				</div>
			</article>';
		}
	}//END FOR
}//END IF

echo $html;
?>