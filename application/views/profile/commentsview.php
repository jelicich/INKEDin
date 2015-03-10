
<section class="col-md-9" id="profile-mid-col">
	
	<h1 class="comments-section">Comments</h1>

	<?php 
		for ($i=0; $i < sizeof($comments); $i++) { 
	?>	

	<article class="col-md-12 pic-sq-grid">
		<ul class="owner-container clearfix">
			
			<li class="owner-pic">
				<a href="#">
					<img src="<?php echo $comments[$i]['photo_path']; ?>" alt="">
				</a>
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

			<li class="owner-comment">
				<span><?php echo $comments[$i]['comment']; ?></span>
			</li>

		</ul>
	</article>

 	<?php 
     	}// end for
	?>

</section>

