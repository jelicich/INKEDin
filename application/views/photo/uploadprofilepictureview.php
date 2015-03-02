<!-- AJAX MSG CONTAINER -->
<div id="user-profile-picture-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->
<form method="post" action="/photo/upload_photo" id="profile-pic-form" enctype="multipart/form-data">
	<div class="input-container">
		<div class="input-container-inner">
			<label for="album-name">Seleccionar foto</label>
			<input type="file" name="upl" id="profile-input-file" onchange="inked.Photo.validateForm(event)"/>
		</div>							
	</div>
	
	<button class="btn btn-default btn-lg disabled" id="save-profile-pic-btn" onclick="inked.Photo.uploadPhoto(event)">Guardar</button>
</form>
