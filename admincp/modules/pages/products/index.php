<!-- tabs list -->
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#products" aria-controls="colors" role="tab" data-toggle="tab">Products Management</a></li>
	<li role="presentation"><a href="#category" aria-controls="outlined" role="tab" data-toggle="tab">Categories</a></li>
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
	
	<div role="tabpanel" class="tab-pane in active fade" id="products">
		<h3 class="m-b-lg">Products Management</h3>
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">

					<div class="widget-body">
						<?php include("includes/tab_products.php") ?>
					</div><!-- .widget-body -->

				</div><!-- .widget -->
			</div><!-- END column -->

		</div><!-- .row -->
	</div><!-- .tab-pane -->

	<div role="tabpanel" class="tab-pane fade" id="category">
		<h3 class="m-b-lg">Categories</h3>
		<div class="row">

			<div class="col-md-12">
				<div class="widget">

					<div class="widget-body">
						<?php include("includes/tab_category.php") ?>
					</div><!-- .widget-body -->

				</div><!-- .widget -->
			</div><!-- END column -->

		</div><!-- .row -->
	</div><!-- .tab-pane -->

</div><!-- .tab-content -->