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

				$hide_inbox_headers = '';
				$back_button = '';
				$hide_messages_list = 'hide-messages-list';

				if (isset($messages)) {
									
						$hide_inbox_headers = "hide-inbox-header";
						$back_button = "<a href='/message/inbox/' class='btn btn-default btn-md btn-block btn-back'>Volver</a>";
						$hide_messages_list = '';
				}
			?>	
				
				<div class="<?php echo 'conversations-column col-md-4 '.$hide_inbox_headers; ?>">
					
					<h2>Inbox</h2>
					<ul id="conversation-list" >

					<?php 

						$message_status = '';
						$me = '';

						for ($i=0; $i < sizeof($conversations); $i++){ 


							if ( $conversations[$i][0]['status'] == 1 ){

								 $message_status = "<span class='glyphicon glyphicon-ok' style='color:#c99241'></span>";
							}

							if ( $user['id'] != $conversations[$i][0]['user_id'] ){
								
								if ( $conversations[$i][0]['status'] == 0 ){

										$message_status = "<span class='glyphicon glyphicon-record' style='color:#c99241'></span>";
								}

							}else{

								$message_status = '';
								$me = "<span style='color:#c99241'>Yo: </span>";// buscar icono apropiado
							}
					?>			
								<li>
									<a href=" <?php echo '/message/messages_list/'.$conversations[$i]['from_id']; ?>" >
										
										<div class="col-md-3">
											<?php echo $conversations[$i]['photo']; ?>
										</div>

										<div class="col-md-7">
											<dl>
												<dt><?php echo $conversations[$i]['name'].' '.$conversations[$i]['last_name']; ?></dt>
												<dd class="conversation-date date-format">
													<?php
														echo Helper_Datetime::date_format($conversations[$i][0]['date']);
													?>
												</dd>
												<dd>
													<?php 
													echo $me.' '.$conversations[$i][0]['message'].'...'; 
													?>
												</dd>
											</dl>
										</div>

										<div class="col-md-2">
											<?php 
												echo $message_status;
											?>
										</div>
										
									</a>
								</li>
					<?php
						} // end for
					?>

					</ul>
				</div>

				<div class="<?php echo 'messages-column col-md-8 '.$hide_messages_list; ?>">
					
					<div class="messages-header col-md-12 clearfix">
							
						<div class="col-md-8">
							
						<?php 
								if(isset($user_from)) {  
									echo '<h4>Conversacion con <span>'.$user_from['name'].' '.$user_from['last_name'].'</span></h4></div>'; // closes div col-md-8; 
						?>
									<div class="col-md-4">
										<a href='#' class="btn btn-default btn-md btn-block" data-toggle="modal" data-target="#sendMessage" data-whatever="<?php echo $user_from['name'].' '.$user_from['last_name']; ?>">Responder</a>
										<?php echo $back_button; ?>
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
							$message_photo = '';
							$profile_url = '';

							for ($i=0; $i < sizeof($messages); $i++) { 
								
								if ( $messages[$i]['user_id'] == $user['id'] ) {
									
									$messages_class = "class='each-message my-messgage col-md-12'";
									$message_from = $user['name'].' '.$user['last_name'];
									$message_photo = $conversations[0]['profile_photo'];
									$profile_url = "/profile/".$user['id'];
									
								}else{

									$messages_class = "class='each-message their-messages col-md-12'";
									$message_from = $user_from['name'].' '.$user_from['last_name'];
									$message_photo = $conversations[0]['photo'];
									$profile_url = "/profile/".$user_from['id'];
								    
								}
					?>
					<div class="messages-body col-md-12">
						
						<div <?php echo $messages_class; ?> >

							<div class="each-message-header col-md-12 clearfix">

								<div class="col-md-9">
									<div class="row">
										<a href="<?php echo $profile_url; ?>">
											<?php echo $message_photo; ?>
											<span style="margin-left: 5px;"><strong><?php echo $message_from; ?></strong></span>
										</a>
									</div>
								</div>

								<div class="col-md-3 conversation-date ">
									<span class="date-format"><?php echo Helper_Datetime::date_format($messages[$i]['date']); ?></span>
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
        <h4 class="modal-title" id="sendMessageLabel"></h4>
      </div>

      <div class="modal-body">
	        <form method="post" action="/message/save_message/<?php  if(isset($user_from)){ echo $user_from['id']; }  ?>" id="message-form">
	        	
	        	<div class="form-group">
		            <label for="message-text" class="control-label">Mensaje</label>
		            <textarea class="form-control" id="message-text" name="message" required></textarea>
		            <input type="hidden" name="inbox_reply_button" value="inbox_reply_button">
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