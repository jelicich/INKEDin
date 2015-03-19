<?php
if(!empty($comments))
{
	for ($i=0; $i < sizeof($comments); $i++) 
	{ 
?>	
		<article class="col-md-12 pic-sq-grid light-bg">
			<ul class="owner-container owner-comment clearfix">
				
				<li class="owner-pic">
					<img src="<?php echo $comments[$i]['photo_path']; ?>" alt="">
				</li>

				<li class="owner-detail">
					<dl>
						<dt>
							<h2><?php echo $comments[$i]['name'].' '.$comments[$i]['last_name']; ?></h2>
						</dt>
						
						<dd>
							<span>
								<?php 

									$comment_date = strtotime($comments[$i]['date']);
									$comment_date = date('l jS \of F Y h:i:s A', $comment_date); 
									echo $comment_date;
								?>
							</span>
						</dd>
					</dl>
				</li>
			</ul>
			<div class="comment-profile">
				<span><?php echo $comments[$i]['comment']; ?></span>
			</div>
		</article>
<?php 
	}// end for
}
?>