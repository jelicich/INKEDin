<div class="albums-container">
	<h2>Editar Albums</h2>
		<div class="row">
			<?php
			for($i = 0; $i < sizeof($albums); $i++)
			{
			?>
			<div class="col-md-3 album-edit-container">
				<img src="<?php echo '/users/'.$albums[$i]['user_id'].'/img/sm/'.$albums[$i]['photo']?>" alt="<?php echo $albums[$i]['name'] ?>" class="album-cover"/>
				<h3><?php echo $albums[$i]['name'] ?></h3>
				<button class=" btn btn-default btn-sm" data-album-id="<?php echo $albums[$i]['id']?>" onclick="inked.Album.loadAlbumEdit(event)">Editar</button>
				<button class=" btn btn-danger btn-sm" data-album-id="<?php echo $albums[$i]['id']?>" onclick="inked.Album.deleteAlbum(event)">Borrar</button>
			</div>	
			<?php
			}
			?>
		</div>		
		
							
</div>



<!-- AJAX MSG CONTAINER -->
<div id="user-album-edit-msg" class="msg-ajax">
</div>
<!-- END AJAX MSG CONTAINER -->