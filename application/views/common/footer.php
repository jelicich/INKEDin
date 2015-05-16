<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-2 col-xs-12">
				<ul id="site-social" class="clearfix">
					<li><a href=""><img src="/assets/common/footer/img/fb-icon.jpg" alt="" /></a></li>
					<li><a href=""><img src="/assets/common/footer/img/tw-icon.jpg" alt="" /></a></li>
					<li><a href="#wrapper" class="anchor"><span class="glyphicon glyphicon-chevron-up"></span></a></li>
				</ul>
			</div>
			<div class="col-md-2" id="footer-artists">
				<h3>Artistas</h3>
				<ul>	
					<?php 
					for($i = 0; $i < sizeof($styles); $i++)
					{
					?>
						<li><a href="/search/artists/<?php echo $styles[$i]['style']?>"><?php echo $styles[$i]['style']; ?></a></li>
					<?php	
					}
					?>
				</ul>
			</div>
			<div class="col-md-2" id="footer-tags">
				<h3>Busquedas</h3>
				<?php 
				if(sizeof($searches) > 0)
				{
					if(sizeof($searches) > 10)
					{
						$size = 10;
					}	
					else
					{
						$size = sizeof($searches);
					}
				?>
				<ul>
					<?php
					for($i = 0; $i < $size; $i++)
					{
						if(strlen($searches[$i]['term']) > 15)
						{
							$term = substr($searches[$i]['term'], 0, 14).'...';
						}
						else
						{
							$term = $searches[$i]['term'];
						}
					?>
						<li><a href="/search/all/<?php echo $searches[$i]['term']?>"><?php echo $term ?></a></li>
					<?php	
					}
					?>
				</ul>
				<?php
				}//END IF
				?>
			</div>
			<div class="col-md-2" id="footer-tags-2">
				<?php
				if(sizeof($searches) > 10)
				{
				?>
				<ul>
					<?php 
					for($i = 10; $i < sizeof($searches); $i++)
					{
						if(strlen($searches[$i]['term']) > 15)
						{
							$term = substr($searches[$i]['term'], 0, 14).'...';
						}
						else
						{
							$term = $searches[$i]['term'];
						}
					?>
						<li><a href="/search/all/<?php echo $searches[$i]['term']?>"><?php echo $term ?></a></li>
					<?php 
					}
					?>
				</ul>
				<?php
				}//END IF
				?>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<p id="privacy"><span class="glyphicon glyphicon-copyright-mark" ></span> 2015 Todos los derechos reservados 
				<br><a href="/terms">Terminos y Condiciones</a></p>
			</div>
		</div>
	</div>
</footer>

