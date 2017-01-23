<!-- tabs list -->
<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#contents" aria-controls="colors" role="tab" data-toggle="tab">Contents</a></li>
	<li role="presentation"><a href="#founder" aria-controls="colors" role="tab" data-toggle="tab">Founder Details</a></li>
	<li role="presentation"><a href="#gallery" aria-controls="colors" role="tab" data-toggle="tab">Gallery</a></li>
	<li role="presentation"><a href="#testimonial" aria-controls="colors" role="tab" data-toggle="tab">Testimonial</a></li>
	<li role="presentation"><a href="#seo" aria-controls="outlined" role="tab" data-toggle="tab">S.E.O</a></li>
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
	
	<div role="tabpanel" class="tab-pane in active fade" id="contents">
		<h3 class="m-b-lg">Contents</h3>
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
	
	<div role="tabpanel" class="tab-pane fade" id="founder">
		<h3 class="m-b-lg">Founder</h3>
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">

					<div class="widget-body">
						<?php include("includes/tab_founder.php") ?>
					</div><!-- .widget-body -->

				</div><!-- .widget -->
			</div><!-- END column -->

		</div><!-- .row -->
	</div><!-- .tab-pane -->
	
	<div role="tabpanel" class="tab-pane fade" id="gallery">
		<h3 class="m-b-lg">Gallery</h3>
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">

					<div class="widget-body">
						<?php include("includes/tab_gallery.php") ?>
					</div><!-- .widget-body -->

				</div><!-- .widget -->
			</div><!-- END column -->

		</div><!-- .row -->
	</div><!-- .tab-pane -->
	
	<div role="tabpanel" class="tab-pane fade" id="testimonial">
		<h3 class="m-b-lg">Testimonials</h3>
		<div class="row">
			
			<div class="col-md-12">
				<div class="widget">

					<div class="widget-body">
						<?php include("includes/tab_testimonial.php") ?>
					</div><!-- .widget-body -->

				</div><!-- .widget -->
			</div><!-- END column -->

		</div><!-- .row -->
	</div><!-- .tab-pane -->
	
	<div role="tabpanel" class="tab-pane fade" id="seo">
		<h3 class="m-b-lg">Search Engine Optimizations</h3>
		<div class="row">

			<div class="col-md-12">
				<div class="widget">

					<div class="widget-body">
						<?php include("includes/tab_seo.php") ?>
					</div><!-- .widget-body -->

				</div><!-- .widget -->
			</div><!-- END column -->

		</div><!-- .row -->
	</div><!-- .tab-pane -->

</div><!-- .tab-content -->