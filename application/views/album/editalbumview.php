
<form method="post" action="/photo/edit_photo" id="edit-album-form" data-album-id="<?php echo $album['id']; ?>">

	<div class="input-container">
		<h3>Editar Album <i><?php echo $album['name']; ?></i></h3>
			<div class="row">
				<?php
				for($i = 0; $i < sizeof($photos); $i++)
				{
				?>
				<div class="col-md-3 photo-edit-container">
					<img src="<?php echo '/users/'.$photos[$i]['user_id'].'/img/sm/'.$photos[$i]['photo']?>" alt="$photos[$i]['description']" class="photo-edit-album" data-photo-id="<?php echo $photos[$i]['id']?>"/>
					<label class="label-toggle" for="description-<?php echo $photos[$i]['id']?>">Descripción</label>
					<textarea type="text" id="description-<?php echo $photos[$i]['id']?>" name="description-<?php echo $photos[$i]['id']?>" class="description"><?php echo $photos[$i]['description']?></textarea>
					<label class="label-toggle" for="tags-<?php echo $photos[$i]['id']?>">Tags</label>
					<input type="text" id="tags-<?php echo $photos[$i]['id']?>" name="tags-<?php echo $photos[$i]['id']?>" value="<?php echo $photos[$i]['tags']?>" class="tags">
					<div class="delete-container">
						<input type="checkbox" id="delete-<?php echo $photos[$i]['id']?>" name="delete-<?php echo $photos[$i]['id']?>" value="delete" class="delete">
						<label for="delete-<?php echo $photos[$i]['id']?>">Borrar</label>
					</div>					
				</div>	
				<?php
				}
				?>
			</div>
			
								
	</div>
	<div class="btn-finish-container">
		<button class="btn btn-default btn-lg" onclick="inked.Album.addPhotos(event)">Agregar fotos</button>
		<input type="submit" class="btn btn-default btn-lg" value="Guardar">
	</div>
	
	
	
	
</form>

<!-- AJAX MSG CONTAINER -->
<div id="user-album-edit-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->