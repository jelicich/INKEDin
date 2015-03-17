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
				
				<div class="conversations-column col-md-4">
					
					<h2>Inbox</h2>
					<ul id="conversation-list">

						<li>
							<a href="/profile/4">
								
								<div class="col-md-3">
									<img src="/assets/common/app/img/default.jpg" alt="" class="img-circle">
								</div>

								<div class="col-md-7">
									<dl>
										<dt>Julieta Molinari</dt>
										<dd class="conversation-date">27 de Marzo</dd>
										<dd>Tengo el pelo de concha....</dd>
									</dl>
								</div>

								<div class="col-md-2">
									<span><strong>Leido</strong></span>
								</div>
								
							</a>
						</li>

						<li>
							<a href="/profile/4">
								
								<div class="col-md-3">
									<img src="/assets/common/app/img/default.jpg" alt="" class="img-circle">
								</div>

								<div class="col-md-7">
									<dl>
										<dt>Julieta Molinari</dt>
										<dd class="conversation-date">27 de Marzo</dd>
										<dd>Tengo el pelo de concha....</dd>
									</dl>
								</div>

								<div class="col-md-2">
									<span><strong>Leido</strong></span>
								</div>
								
							</a>
						</li>

						<li>
							<a href="/profile/4">
								
								<div class="col-md-3">
									<img src="/assets/common/app/img/default.jpg" alt="" class="img-circle">
								</div>

								<div class="col-md-7">
									<dl>
										<dt>Julieta Molinari</dt>
										<dd class="conversation-date">27 de Marzo</dd>
										<dd>Tengo el pelo de concha....</dd>
									</dl>
								</div>

								<div class="col-md-2">
									<span><strong>Leido</strong></span>
								</div>
								
							</a>
						</li>


						<li>
							<a href="/profile/4">
								
								<div class="col-md-3">
									<img src="/assets/common/app/img/default.jpg" alt="" class="img-circle">
								</div>

								<div class="col-md-7">
									<dl>
										<dt>Julieta Molinari</dt>
										<dd class="conversation-date">27 de Marzo</dd>
										<dd>Tengo el pelo de concha....</dd>
									</dl>
								</div>

								<div class="col-md-2">
									<span><strong>Leido</strong></span>
								</div>
								
							</a>
						</li>
					</ul>
				</div>

				<div class="messages-column col-md-8">
					
					<div class="messages-header col-md-12">

						<div class="col-md-8"><h4>Conversacion con Julieta Molinari</h4></div>
						<div class="col-md-4">
							<a href='#' class="btn btn-default btn-md btn-block" data-toggle="modal" data-target="#sendMessage" data-whatever="<?php echo 'julieta Molinari'; //echo $profile['name'].' '.$profile['last_name']; ?>"  onclick="inked.Message.saveMessage()">Responder</a>
						</div>

					</div>

					<div class="messages-body col-md-12">
						
						<div class="each-message their-messages col-md-12">

							<div class="each-message-header col-md-12">

								<div class="col-md-9">
									<img src="/assets/common/app/img/default.jpg" alt="" class="img-circle">
									<span><strong>Julieta Molinari</strong></span>
								</div>

								<div class="col-md-3 conversation-date">
									<span>27 de Marzo 14:45</span>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						
						</div>
					</div>


					<div class="messages-body col-md-12">
						
						<div class="each-message my-messgage col-md-12">

							<div class="each-message-header col-md-12">
								<div class="col-md-9">
									<img src="/assets/common/app/img/default.jpg" alt="" class="img-circle">
									<span><strong>Julan Pena</strong></span>
								</div>

								<div class="col-md-3 conversation-date">
									<span>27 de Marzo 14:53</span>
								</div>
							</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
						
						</div>
					</div>
				</div>

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