<!-- tabs list -->
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#partners" aria-controls="colors" role="tab" data-toggle="tab">Partners Management</a></li>
</ul><!-- .nav-tabs -->

<!-- Tab panes -->
<div class="tab-content p-md">
	
	<?php
    if($_SESSION["systemSucces"]<>""){
    ?>
		<div class="alert alert-success" role="alert">
			<strong><i class="fa fa-check"></i></strong>
			<span><?=$_SESSION["systemSucces"]?></span>
		</div>
		<?php $_SESSION["systemSucces"]=""; ?>
	<?php } ?>

	<?php
    if($_SESSION["systemError"]<>""){
    ?>
		<div class="alert alert-danger" role="alert">
			<strong><i class="fa fa-check"></i></strong>
			<span><?=$_SESSION["systemError"]?></span>
		</div>
		<?php $_SESSION["systemError"]=""; ?>
	<?php } ?>
	
	<div role="tabpanel" class="tab-pane in active fade" id="partners">
		<h3 class="m-b-lg">Partners Management</h3>
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">

					<div class="widget-body">
						<?php include("includes/tab_contents.php") ?>
					</div><!-- .widget-body -->

				</div><!-- .widget -->
			</div><!-- END column -->

		</div><!-- .row -->
	</div><!-- .tab-pane -->

</div><!-- .tab-content -->