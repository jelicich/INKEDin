<!-- AJAX MSG CONTAINER -->
<div id="user-profile-picture-msg" class="msg-ajax">
	<?php 
	if(isset($result))
	{
		echo '<p>'.$result.'</p>';
	}
	?>
</div>
<!-- END AJAX MSG CONTAINER -->
<form method="post" action="/photo/upload_photo" id="profile-pic-form" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-3 edit-profile-pic">
			<img src="<?php echo $user['photo_path'] ?>" id="display-current-photo" alt="Foto de perfil"/>
		</div>
		<div class="col-md-9 input-container">
			<div class="input-container-inner">
				<label for="profile-input-file">Seleccionar foto de perfil</label>
				<input type="file" name="upl" id="profile-input-file" onchange="inked.Photo.validateForm(event)"/>
				<button class="btn btn-default btn-lg disabled" id="save-profile-pic-btn" onclick="inked.Photo.uploadPhoto(event)" data-target="profile">Guardar</button>
			</div>							
		</div>

	</div>
	
	
</form>

