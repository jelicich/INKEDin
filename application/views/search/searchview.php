<!doctype html>
<html>
<head>
	<?php echo $head ?>

	<!-- Load here view specific css and scripts -->


</head>

<body class="inked profileview">

<div id="wrapper">
	<!-- header-->
	<?php echo $header; ?>
	<!-- end header-->


	<!-- content -->
	<?php echo $content ?>
	<!-- end content -->

	<?php echo $footer ?>

</div>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="" id="photo-target" data-photo-id="" class="img-responsive">
            <div class="modal-tools">
           		<p id="photo-description"></p>
           		<p class="photo-tags"><strong>Tags:</strong> <span id="photo-tags"></span></p>
           		<?php 
           		if($is_logged_in && $role == 2)
           		{
           		?>
           			<a href="#" class="btn btn-default btn-save-photo" id="save-to-favourites" onclick="inked.Common.Modal.saveToFavourites(event);">Guardar <span class="glyphicon glyphicon-picture"></span></a>
           		<?php	
           		}
           		?>
           		
            </div>
        </div>
    </div>
  </div>
</div>


</body>
</html>