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
	<div class="">
		<img src="<?php echo $user['photo_path'] ?>" width="250" height="250" id="display-current-photo" alt="Foto de perfil"/>
	</div>
	<div class="input-container">
		<div class="input-container-inner">
			<label for="profile-input-file">Seleccionar foto</label>
			<input type="file" name="upl" id="profile-input-file" onchange="inked.Photo.validateForm(event)"/>
		</div>							
	</div>
	
	<button class="btn btn-default btn-lg disabled" id="save-profile-pic-btn" onclick="inked.Photo.uploadProfilePhoto(event)">Guardar</button>
</form>
