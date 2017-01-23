<a href="?page=<?=$page?>&cate=<?=$cate?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Testimonial List</button>
</a>
<br><br>

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Create New Testimonial</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post" data-parsley-validate>
	
		<input type="hidden" name="form" value="pages-about-us-addTestimonial">
		<input type="hidden" name="token" value="<?=$Token?>">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Name</label>
			<div class="col-sm-10">
				<input type="text" name="txtTitle" id="txtTitle" class="form-control" value="" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Sub Name</label>
			<div class="col-sm-10">
				<input type="text" name="txtSubName" id="control-demo-1" class="form-control" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Content</label>
			<div class="col-sm-10">
				<textarea name="txtContent" id="txtContent" class="form-control" cols="30" rows="5" required="required"></textarea>
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Create</button></label>
			<div class="col-sm-4">
				
			</div>
		</div><!-- .form-group -->
	
	</form>

</div><!-- .widget-body -->
</form>