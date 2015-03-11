<article class="col-md-9" id="profile-mid-col">
	<h1><?php echo $profile['name'].' '.$profile['last_name']?></h1>
	<h2 class="profile-section"><?php echo $photos[0]['name']; ?></h2>
	
	<div class="row">	
	<?php
	for ($i=0; $i < sizeof($photos); $i++) 
	{ 
	?>
		<div class="col-md-4 pic-sq-grid">
			<div class="inner-pic-sq-grid border-img">
				<a href="#" class="photo-anchor" data-toggle="modal" data-target="#myModal">
					<img src="<?php echo '/users/'.$photos[$i]['user_id'].'/img/sm/'.$photos[$i]['photo']?>" alt="<?php echo $photos[$i]['description'] ?>" class="photo-edit-album" data-photo-id="<?php echo $photos[$i]['id']?>" data-tags="<?php echo $photos[$i]['tags']?>"/>
				</a>
			</div>
		</div>
	<?php 
	}
	?>
	</div>
</article>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="" id="photo-target" class="img-responsive">
            <div class="modal-tools">
           		<p id="photo-description"></p>
           		<p class="photo-tags"><strong>Tags:</strong> <span id="photo-tags"></span></p>
           		<a href="#" class="btn btn-default btn-save-photo">Guardar <span class="glyphicon glyphicon-picture"></span></a>
            </div>
        </div>
    </div>
  </div>
</div>