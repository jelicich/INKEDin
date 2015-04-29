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
									

										<ul class="owner-container clearfix">
											
											
												<li class="owner-pic">
													<a href="<?php echo '/profile/'.$followers[$i]['follower_id']; ?>"><?php echo $followers[$i]['photo_path']; ?></a>
												</li>

												<li class="owner-detail">
													<dl>
														<dt>
															<a href="<?php echo '/profile/'.$followers[$i]['follower_id']; ?>"><h2><?php echo $followers[$i]['name'].' '.$followers[$i]['last_name']; ?></h2></a>
														
														</dt>

<?php 

														if ($followers[0]["user_id"] == $user["id"]) {
			     				     		
?>															<dd>
																<a href="#" class="remove-favourite" data-favourite="<?php echo $followers[$i]['follower_id']; ?>">
																	<span class="glyphicon glyphicon-trash"></span>
																</a>
															</dd>
<?php 
			 										    }	
?>
													</dl>
												</li>
											

										</ul>
								</div>
							</article>
<?php 
			     		}// end for
?>
					</div>

					<div role="tabpanel" class="tab-pane" id="account2">
<?php 		     
 	
						for ($i=0; $i < sizeof($who_follows_me); $i++) { 
?>	
							<article class="col-md-12 pic-sq-grid">
								<div class="tab-content">

										<ul class="owner-container clearfix">
											
											
												<li class="owner-pic">
													<a href="<?php echo '/profile/'.$who_follows_me[$i]['follower_id']; ?>"><?php echo $who_follows_me[$i]['photo_path']; ?></a>
												</li>

												<li class="owner-detail">
													<dl>
														<dt>
															<a href="<?php echo '/profile/'.$who_follows_me[$i]['follower_id']; ?>"><h2><?php echo $who_follows_me[$i]['name'].' '.$who_follows_me[$i]['last_name']; ?></h2></a>
														
														</dt>

													</dl>
												</li>
											

										</ul>
								</div>
							</article>
<?php 
			     		}// end for
?>
					</div>

				</div>

			</div>
</aside>


