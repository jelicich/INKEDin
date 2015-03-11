<aside class="col-md-3" id="side-content-profile">

			<div id='favourite_list'>
<?php 		     
					for ($i=0; $i < sizeof($followers); $i++) { 
?>	
						<article class="col-md-12 pic-sq-grid">
							<ul class="owner-container clearfix">
								
								<li class="owner-pic">
									<a href="#">
										<img src="<?php echo $followers[$i]['photo_path']; ?>" alt="">
									</a>
								</li>

								<li class="owner-detail">
									<dl>
										<dt>
											<h2><?php echo $followers[$i]['name'].' '.$followers[$i]['last_name']; ?></h2>
										</dt>

									</dl>
								</li>

							</ul>
						</article>
<?php 
			     	}// end for
?>
			</div>


</aside>


