<aside class="col-md-3" id="side-content-profile">

			<div id='favourite_list'>
<?php 		     
					for ($i=0; $i < sizeof($followers); $i++) { 
?>	
						<article class="col-md-12 pic-sq-grid">
							<ul class="owner-container clearfix">
								
								<a href="<?php echo '/profile/'.$followers[$i]['follower_id']; ?>">
									<li class="owner-pic">
										<img src="<?php echo $followers[$i]['photo_path']; ?>" alt="" class="img-circle">
									</li>

									<li class="owner-detail">
										<dl>
											<dt>
												<h2><?php echo $followers[$i]['name'].' '.$followers[$i]['last_name']; ?></h2>
											</dt>

										</dl>
									</li>
								</a>

							</ul>
						</article>
<?php 
			     	}// end for
?>
			</div>


</aside>


