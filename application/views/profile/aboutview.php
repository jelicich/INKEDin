<?php var_dump($profile); exit;?>

<article class="col-md-6" id="profile-mid-col">
	<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
	<div id="artist-info-container" class="light-bg">
		<div class="border-divider">
			<h2>Acerca de mi</h2>
			<p><?php echo $profile['about'] ?></p>
		</div>
		<div class="border-divider">
			<h2>Estilos</h2>
			<ul>
				<?php 
				for($i = 0; $i < sizeof($profile['styles']); $i++)
				{
					echo '<li>'.$profile['styles'][$i]['style'].'</li>';
				}
				?>
			</ul>
		</div>
		<div class="border-divider">
			<h2>Disponibilidad</h2>
			<p><?php echo $profile['availability'] ?></p>
		</div>
		<div>
			<h2>Contacto</h2>
			<dl>
				<dt>Telefono</dt>
				<dd><?php echo $profile['phone']?></dd>
				<dt>Direccion</dt>
				<dd id='address'><?php echo $profile['address']?></dd>
			</dl>

			<div id="map">
			  <div id="map_canvas" style="width:100%; height:200px"></div>
			</div>
			
		</div>
	</div>
</article>