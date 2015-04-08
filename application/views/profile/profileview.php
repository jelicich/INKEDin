<!doctype html>
<html>
<head>
	<?php echo $head ?>
	<!-- Load here view specific css and scripts -->
</head>

<body class="inked profileview">

<div id="wrapper">
	<!-- header-->
	<?php echo $header; //var_dump($profile);  ?>
	<!-- end header-->


<!-- content -->
	<section id="site-content" class="container">
		<div class="row">
			<!-- COVER PIC -->
			<div class="col-md-12" id="container-cover-pic">
				<div id="inner-container-cover-pic">
					<?php 
					$pos = strpos($profile['cover'], 'cover');
					if($pos !== false) 
					{
					?>
						<?php echo $profile['cover'] ?>
					<?php
					}
					else
					{
					?>
						<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal"><?php echo $profile['cover'] ?></a>
					<?php
					}
					?>

				</div>
			</div>
			<!-- END COVER PIC -->

			<!-- LEFT COL -->
			<?php
			if($profile['role'] == 2)
			{
				$class='profile-client-col';
			}
			else
			{
				$class = '';
			}
			?>
			<article class="col-md-3 <?php echo $class?>" id="profile-left-col">
				<?php 
				//CHECK ROLE
				if($profile['role'] == 1)
				{
					$id = 'id = "profile-fix-wrapper"';
				}
				else
				{
					$id = "";
				}
				?>
				<div <?php echo $id ?> class="profile-free">
					<!-- PROFILE PIC -->
					<div id="profile-pic-container" class="border-img">
						<?php 
						$pos = strpos($profile['photo'], 'default');
						if($pos !== false) 
						{
						?>
							<?php echo $profile['photo'] ?>
						<?php
						}
						else
						{
						?>
							<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal"><?php echo $profile['photo'] ?></a>
						<?php
						}
						?>
					</div>
				
				<?php 
				//CHECK ROLE
				if($profile['role'] == 1)
				{
				?>
					<!-- END PROFILE PIC -->
					<div id="profile-rating-container" class="clearfix border-divider">
						
						<div id="ratingvew-container">
							<?php echo $ratingview; ?>
						</div>
						
					</div>
					<?php 
						
						$border_bottom = '';
						
						if ($user['id'] != $profile['id']) { // evitar repetir este condicional
								
								$border_bottom = 'border-divider';
						}

					?>

					<div class="profile-buttons-container <?php echo $border_bottom; ?>"  >

						<?php 
							if (isset($logged_in)) 
							{	
							  	$this_profile_followers_list = [];

							  	foreach ($profile['profile_followers'] as $key ) 
							  	{

							  		$this_profile_followers_list[] = $key['user_id'];
							  	}

							  	if( $user['id'] != $profile['id']  )
								{		
						?>
										<a href="#" class="btn btn-default btn-block btn-profile" id="send-msg" data-toggle="modal" data-target="#sendMessage" data-whatever="<?php echo $profile['name'].' '.$profile['last_name']; ?>"  onclick="inked.Message.saveMessage()"  >ENVIAR MENSAJE <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
						<?php							
								 	if (!in_array( $user['id'], $this_profile_followers_list )) 
								 	{
						?>		
										<a href="#" class="btn btn-default btn-block btn-profile" id="add-fav" data-profile-id ="<?php echo $profile['id']; ?>" onclick="inked.Profile.saveFollower()" >AGREGAR A FAVORITOS  <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
						<?php 
									}
									else
									{
						?>				
										<a href="#" class="btn btn-success btn-block btn-profile" >YA ES TU FAVORITO !</span></a>
						<?php 		}
								}// end if 2
							}// end if 1
						?>
					
					</div>
					
					<nav class="menu-profile">
						<ul>
							<li><a href="/profile/<?php echo $profile['id']?>">Información</a></li>
							<li><a href="/profile/<?php echo $profile['id']?>/albums_list">Albumes</a></li>
							<li><a href="/profile/<?php echo $profile['id']?>/comments">Comentarios</a></li>
						</ul>
					</nav>
				</div>
				<?php
				}//END IF ROLE
				?>
			</article>
			<!--END LEFT COL -->

			<!-- MID COL -->
			<?php echo $content ?>
			<!--END MID COL -->

			<!--RIGHT COL-->
			<?php 
			if(isset($sidebar))
				echo $sidebar 
			?>
			<!--RIGHT COL -->
		</div>
	</section>
	<!-- end content -->

	<?php echo $footer ?>

</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="" id="photo-target" data-photo-id="" class="img-responsive">
            <div class="modal-tools">
           		<p id="photo-description"></p>
           		<p class="photo-tags"><strong>Tags:</strong> <span id="photo-tags"></span></p>
           		<?php 
           		if($is_logged_in && $role == 2)
           		{
           		?>
           			<a href="#" class="btn btn-default btn-save-photo" id="save-to-favourites" onclick="inked.Common.Modal.saveToFavourites(event);">Guardar <span class="glyphicon glyphicon-picture"></span></a>
           		<?php	
           		}
           		?>
           		
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="sendMessageLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="sendMessageLabel">Nuevo mensaje</h4>
      </div>

      <div class="modal-body">
	        <form method="post" action="/message/<?php echo $profile['id']; ?>/<?php echo $user['id']; ?>/save_message" id="message-form">
	        	
	        	<div class="form-group">
		            <label for="message-text" class="control-label">Mensaje</label>
		            <textarea class="form-control" id="message-text" name="message" required></textarea>
            	</div>
	       
	      
		     	<div class="modal-footer">
			        <button type="submit" class="btn btn-primary">Enviar</button>
			    </div>
			    
	       </form>
       </div>

    </div>
  </div>
</div>



</body>
</html>



