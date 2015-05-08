<section class="col-md-9" id="profile-mid-col">
	<div class="name-profile clearfix">
		<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
		<div class="fb-like" data-href="/profile/<?php echo $profile['id']?>" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
	</div>
	<h2 class="profile-section">Comentarios</h2>

	<?php 
		if ($logged_in == true) {
	?>
		<a href="#" class="btn btn-default btn-block btn-profile" id="add-fav" data-toggle="modal" data-target="#comments_modal">DEJAR UN COMENTARIO</span></a>
	<?php  
		}else{
	?>

	<a href="#" class="btn btn-default btn-block btn-profile col-md-5" >REGISTRARSE</a>
	<a href="#" class="btn btn-default btn-block btn-profile col-md-5" >INGRESAR</a>
	
	<?php
		}
     
		for ($i=0; $i < sizeof($comments); $i++) { 
	?>	
			<article class="col-md-12 pic-sq-grid light-bg">
				<ul class="owner-container owner-comment clearfix">
					
					<li class="owner-pic">
						<a href="/profile/<?php echo $comments[$i]['user_id']; ?>"><img src="<?php echo $comments[$i]['photo_path']; ?>" alt="" class="img-circle"></a>
					</li>

					<li class="owner-detail">
						<dl>
							<dt>
								<a href="/profile/<?php echo $comments[$i]['user_id']; ?>"><h2><?php echo $comments[$i]['name'].' '.$comments[$i]['last_name']; ?></h2></a>
							</dt>
							
							<dd>
								<span class="date-format">
									<?php 

										$comment_date = Helper_Datetime::date_format( $comments[$i]['date'] );
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
		<div class="col-md-12">
			<button class="btn btn-default" id="load-more-comments" onclick="inked.Profile.loadMoreComments()" data-profile-id="<?php echo $profile_id ?>">VER MAS</button>
		</div>
</section>

<!-- comments_modal -->
<div class="modal fade" id="comments_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">DEJA TU COMENTARIO</span></h4>
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