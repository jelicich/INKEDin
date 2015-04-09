<div class="albums-container">
	<h3>Editar Albums</h3>
		<div class="row">
			<?php
			for($i = 0; $i < sizeof($albums); $i++)
			{
			?>
			<div class="col-md-3 album-edit-container">
				<div class="album-edit-container-inner">
					<?php
					if(empty($albums[$i]['photo']))
					{
						$path = '/assets/common/app/img/default_album.jpg';
					}
					else
					{
						$path = '/users/'.$albums[$i]['user_id'].'/img/sm/'.$albums[$i]['photo'];
					}
					?>
					<img src="<?php echo $path ?>" alt="<?php echo $albums[$i]['name'] ?>" class="album-cover"/>					
					<h4><?php 
					if(strlen($albums[$i]['name'])>20)
					{
						$albums[$i]['name'] = substr($albums[$i]['name'], 0,20).'...';
					}
					echo $albums[$i]['name'];
					?></h4>
					<div class="btn-album-container clearfix">
						<button class=" btn btn-default btn-xs" data-album-id="<?php echo $albums[$i]['id']?>" onclick="inked.Album.loadAlbumEdit(event)">Editar</button>
						<button class=" btn btn-danger btn-xs" data-album-id="<?php echo $albums[$i]['id']?>" onclick="inked.Album.deleteAlbum(event)">Borrar</button>
					</div>
				</div>				
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