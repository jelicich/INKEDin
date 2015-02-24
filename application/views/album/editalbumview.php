
<form method="post" action="/photo/edit_photo" id="edit-album-form">

	<div class="input-container">
		<label class="block">Editar Album <i><?php echo $photos[0]['name']; ?></i></label>
			<div class="row">
				<?php
				for($i = 0; $i < sizeof($photos); $i++)
				{
				?>
				<div class="col-md-3 photo-edit-container">
					<img src="<?php echo '/users/'.$photos[$i]['user_id'].'/img/sm/'.$photos[$i]['photo']?>" alt="$photos[$i]['description']" class="photo-edit-album" data-photo-id="<?php echo $photos[$i]['id']?>"/>
					<label for="description-<?php echo $photos[$i]['id']?>">Descripción</label>
					<textarea type="text" id="description-<?php echo $photos[$i]['id']?>" name="description-<?php echo $photos[$i]['id']?>" class="description"> <?php echo $photos[$i]['description']?> </textarea>
					<label for="tags-<?php echo $photos[$i]['id']?>">Tags</label>
					<input type="text" id="tags-<?php echo $photos[$i]['id']?>" name="tags-<?php echo $photos[$i]['id']?>" value="<?php echo $photos[$i]['tags']?>" class="tags">
				</div>	
				<?php
				}
				?>
			</div>		
			
								
	</div>
	<input type="submit" class="btn btn-default btn-lg" value="Guardar">
</form>

<!-- AJAX MSG CONTAINER -->
<div id="user-album-edit-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->