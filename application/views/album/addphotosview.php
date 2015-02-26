<!-- AJAX MSG CONTAINER -->
<div id="user-album-create-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->
<h2>Agregar fotos al album <i><?php echo $album['name']; ?></i></h2>
<form id="upload-add" method="post" action="/photo/upload_photo" style="display: block;" enctype="multipart/form-data">
	
	<div id="drop">
		Arrastra tus fotos o 

		<a class="btn btn-default btn-lg">Buscar</a>
		<input type="file" name="upl" multiple />
		<input type="hidden" name="album_id" id="album-id" value="<?php echo $album['id']?>" />
	</div>

	<ul>
		<!-- The file uploads will be shown here -->
	</ul>

</form>

<button class="btn btn-default btn-lg disabled" id="finish-add" onclick="inked.Album.loadAlbumEdit(event)" style="display: block" data-album-id="<?php echo $album['id']?>">Siguiente</button>
<!-- AJAX MSG CONTAINER -->
<div id="user-album-finish-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->