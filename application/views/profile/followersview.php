<aside class="col-md-3" id="side-content-profile">

			<div id='favourite_list' class="clearfix">
				
				<ul class="nav nav-tabs" role="tablist">
					  <li role="presentation" class="active"><a href="#account1" aria-controls="account1" role="tab" data-toggle="tab">Mis favoritos</a></li>
					  <li role="presentation"><a href="#account2" aria-controls="account2" role="tab" data-toggle="tab">Mis seguidores</a></li>
				</ul>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="account1">

<?php 		     
						for ($i=0; $i < sizeof($followers); $i++) { 
?>	
							<article class="col-md-12 pic-sq-grid">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="account1">

										<ul class="owner-container clearfix">
											
											
												<li class="owner-pic">
													<a href="<?php echo '/profile/'.$followers[$i]['follower_id']; ?>"><?php echo $followers[$i]['photo_path']; ?></a>
												</li>

												<li class="owner-detail">
													<dl>
														<dt>
															<a href="<?php echo '/profile/'.$followers[$i]['follower_id']; ?>"><h2><?php echo $followers[$i]['name'].' '.$followers[$i]['last_name']; ?></h2></a>
														
														</dt>

														<dd>	<a href="<?php  ?>"><span class="glyphicon glyphicon-trash"></span></a></dd>

													</dl>
												</li>
											

										</ul>
									</div>
								</div>
							</article>
<?php 
			     		}// end for
?>
					</div>

					<div role="tabpanel" class="tab-pane active" id="account2">
					</div>

				</div>

			</div>
</aside>


