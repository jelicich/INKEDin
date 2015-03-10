
<section class="col-md-9" id="profile-mid-col">
	
	<h1 class="comments-section">Comments</h1>
	<a href="#" class="btn btn-default btn-block btn-profile" id="add-fav" data-toggle="modal" data-target="#comments_modal">DEJAR UN COMENTARIO  <span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>

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

<!-- comments_modal -->
<div class="modal fade" id="comments_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">DEJA TU COMENTARIO  <span class="glyphicon glyphicon-comment" aria-hidden="true"></span></h4>
      </div>

      <div class="modal-body">
        <textarea></textarea>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default">ENVIAR</button>
      </div>

    </div>
  </div>
</div>