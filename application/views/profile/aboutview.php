<?php //var_dump($profile); exit;?>

<article class="col-md-6" id="profile-mid-col">
	<div class="name-profile clearfix">
		<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
		<div class="fb-like" data-href="/profile/<?php echo $profile['id']?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
	</div>

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
				<dd id='address'>
				<?php

					$map_or_default = '';

					if ( $profile['address'] != null || $profile['city_name'] != null || $profile['province_name'] != null ) {
						
							echo $profile['address'].' '.$profile['city_name'].' '.$profile['province_name']; 
							$map_or_default = "<div id='map_canvas' style='width:100%; min-height:200px'></div>";
					}
				?>
				 </dd>
			</dl>

			<div id="map">
				<?php echo $map_or_default; ?>
			</div>

		</div>
	</div>
</article>