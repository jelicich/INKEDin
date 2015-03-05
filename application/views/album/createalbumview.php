<!-- AJAX MSG CONTAINER -->
<div id="user-album-create-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->
<form method="post" action="/album/create_album" id="new-album-form">
	<div class="input-container">
		<div class="input-container-inner">
			<h3>Nuevo Album</h3>
			<label for="album-name">Nombre</label>
			<input type="text" id="album-name" name="name" maxlength="60" required value=""/>	
		</div>							
	</div>
	<input type="submit" class="btn btn-default btn-lg" value="Crear">
</form>

<form id="upload" method="post" action="/photo/upload_photo" enctype="multipart/form-data">
	<div id="drop">
		Arrastra tus fotos o 

		<a class="btn btn-default btn-lg">Buscar</a>
		<input type="file" name="upl" multiple />
		<input type="hidden" name="album_id" id="album-id" />
	</div>

	<ul>
		<!-- The file uploads will be shown here -->
	</ul>

</form>

<button class="btn btn-default btn-lg disabled" id="finish-album" onclick="inked.Album.loadAlbumEdit(event)">Siguiente</button>
<!-- AJAX MSG CONTAINER -->
<div id="user-album-finish-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->