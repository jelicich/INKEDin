<!doctype html>
<html>
<head>
	<?php echo $head ?>
</head>

<body class="inked myaccountview">

<div id="wrapper">
	<!-- header-->
	<?php echo $header; ?>
	<!-- end header-->

	<!-- content -->
	<section id="site-content" class="container">
		<div class="row">

			<div id="inbox" class="light-bg clearfix">
				<?php 
				// if(isset($messages)) { 
				// 	var_dump($messages); 
				// 	//var_dump($conversations);
				// 	//var_dump($user_from);
				// 	exit;
				// }
				 ?>
				<div class="conversations-column col-md-4">
					
					<h2>Inbox</h2>
					<ul id="conversation-list">

					<?php 
						for ($i=0; $i < sizeof($conversations); $i++) { 
					?>
								<li>
									<a href=" <?php echo '/message/'.$conversations[$i]['conversation_id'].'/'.$conversations[$i]['from_id'].'/messages_list'; ?>" >
										
										<div class="col-md-3">
											<?php echo $conversations[$i]['photo']; ?>
										</div>

										<div class="col-md-7">
											<dl>
												<dt><?php echo $conversations[$i]['name'].' '.$conversations[$i]['last_name']; ?></dt>
												<dd class="conversation-date">
													<?php 
														 echo $conversations[$i][0]['date'];
													?>
												</dd>
												<dd><?php echo $conversations[$i][0]['message'].'...'; ?></dd>
											</dl>
										</div>

										<div class="col-md-2">
											<?php 

												if ($conversations[$i][0]['status'] == 0){

														echo "<span class='glyphicon glyphicon-ok' style='color:#c99241'></span>";
												}
											?>
										</div>
										
									</a>
								</li>
					<?php
						} // end for
					?>

					</ul>
				</div>

				<div class="messages-column col-md-8">
					
					<div class="messages-header col-md-12">
							
						<div class="col-md-8">
							
						<?php 
								if(isset($user_from)) {  
									echo '<h4>Conversacion con '.$user_from['name'].' '.$user_from['last_name'].'</h4></div>'; // closes div col-md-8; 
						?>
									<div class="col-md-4">
										<a href='#' class="btn btn-default btn-md btn-block" data-toggle="modal" data-target="#sendMessage" data-whatever="<?php echo $user['name'].' '.$user['last_name']; ?>"  onclick="inked.Message.saveMessage()">Responder</a>
									</div>
						<?php
								}else{
									echo '<h4>Bandeja de enrtada</h4></div>';// closes div col-md-8
								}
						?>
					</div> <!-- closes messages header -->

					<?php 
						if(isset($messages)) {  

							$messages_class = '';
							$message_from = '';

							for ($i=0; $i < sizeof($messages); $i++) { 
								
								if ( $messages[$i]['user_id'] == $user['id'] ) {
									
									$messages_class = "class='each-message my-messgage col-md-12'";
									$message_from = $user['name'].' '.$user['last_name'];
								
								}else{

									$messages_class = "class='each-message their-messages col-md-12'";
									$message_from = $user_from['name'].' '.$user_from['last_name'];
								}
					?>
					<div class="messages-body col-md-12">
						
						<div <?php echo $messages_class; ?> >

							<div class="each-message-header col-md-12">

								<div class="col-md-9">
									<img src="/assets/common/app/img/default.jpg" alt="" class="img-circle">
									<span><strong><?php echo $message_from; ?></strong></span>
								</div>

								<div class="col-md-3 conversation-date">
									<span><?php echo $messages[$i]['date']; ?></span>
								</div>
							</div>

							<p><?php echo $messages[$i]['message']; ?></p>
						</div>
					</div>
					<?php			
							} //end for
						} // end if
					?>

			

			</div>

		</div>

	</section>
	<!-- end content -->

	<?php echo $footer ?>
	
</div>



<div class="modal fade" id="sendMessage" tabindex="-1" role="dialog" aria-labelledby="sendMessageLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="sendMessageLabel">Nuevo mensaje para</h4>
      </div>

      <div class="modal-body">
	        <form method="post" action="/message/<?php// echo $profile['id']; ?>/<?php //echo $user['id']; ?>/save_message" id="message-form">
	        	
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