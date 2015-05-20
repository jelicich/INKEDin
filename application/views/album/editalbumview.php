
<form method="post" action="/photo/edit_photo" id="edit-album-form" data-album-id="<?php echo $album['id']; ?>">

	<div class="input-container">
		<h3>Editar Album <i><?php echo $album['name']; ?></i></h3>
			<div class="row">
				<?php
				$count = 1;
				$col1 = '';
				$col2 = '';
				$col3 = '';
				$col4 = '';
				for($i = 0; $i < sizeof($photos); $i++)
				{
					if($count > 4) $count = 1;
				
					$html = '<div class="photo-edit-container">
						<img src="/users/'.$photos[$i]['user_id'].'/img/sm/'.$photos[$i]['photo'].'" alt="'.$photos[$i]['description'].'" class="photo-edit-album" data-photo-id="'.$photos[$i]['id'].'"/>
						<label class="label-toggle" for="description-'.$photos[$i]['id'].'">Descripción</label>
						<textarea type="text" id="description-'.$photos[$i]['id'].'" name="description-'.$photos[$i]['id'].'" class="description">'.$photos[$i]['description'].'</textarea>
						<label class="label-toggle" for="tags-'.$photos[$i]['id'].'">Tags</label>
						<input type="text" id="tags-'.$photos[$i]['id'].'" name="tags-'.$photos[$i]['id'].'" value="'.$photos[$i]['tags'].'" class="tags">
						<div class="delete-container">
							<input type="checkbox" id="delete-'.$photos[$i]['id'].'" name="delete-'.$photos[$i]['id'].'" value="delete" class="delete">
							<label for="delete-'.$photos[$i]['id'].'">Borrar</label>
						</div>					
					</div>	';
					switch ($count) {
						case 1:
							$col1 .= $html;
							break;
						case 2:
							$col2 .= $html;
							break;
						case 3:
							$col3 .= $html;
							break;
						case 4:
							$col4 .= $html;
							break;
						default:
							break;
					}
				
					$count ++;
				}
				?>
				
				<div class="col-md-3">
					<?php echo $col1 ?>
				</div>
				<div class="col-md-3">
					<?php echo $col2 ?>
				</div>
				<div class="col-md-3">
					<?php echo $col3 ?>
				</div>
				<div class="col-md-3">
					<?php echo $col4 ?>
				</div>


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