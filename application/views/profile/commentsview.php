<section class="col-md-9" id="profile-mid-col">
	<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
	<h2 class="profile-section">Comentarios</h2>

	<?php 
		if ($logged_in == true) {
	?>
		<a href="#" class="btn btn-default btn-block btn-profile" id="add-fav" data-toggle="modal" data-target="#comments_modal">DEJAR UN COMENTARIO  <span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>
	<?php  
		}else{
	?>

	<a href="#" class="btn btn-default btn-block btn-profile col-md-5" >REGISTRATE<span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>
	<a href="#" class="btn btn-default btn-block btn-profile col-md-5" >LOGUEATE<span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>
	
	<?php
		}
     
		for ($i=0; $i < sizeof($comments); $i++) { 
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
	?>
</section>

<!-- comments_modal -->
<div class="modal fade" id="comments_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">DEJA TU COMENTARIO <span class="glyphicon glyphicon-comment" aria-hidden="true"></span></h4>
      </div>

      <form method="post" action="/profile/<?php echo $profile_id; ?>/leave_comment" id="comment-form">
	      <div class="modal-body">
	        	<textarea name="comment" required ></textarea>
	        	<input type="hidden" name="profile_id" value="<?php echo $profile_id; ?>">
	        
	      </div>

	      <div class="modal-footer">
	        <button class="btn btn-default">Enviar</button>
	      </div>
  	  </form>

    </div>
  </div>
</div>