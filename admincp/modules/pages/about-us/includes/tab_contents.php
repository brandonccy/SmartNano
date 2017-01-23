<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">About Details</h4>
</header><!-- .widget-header -->



<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<form action="#" class="form-horizontal" method="post">
		<input type="hidden" name="form" value="pages-about-us-content">

			<div class="form-group">
				<div class="col-sm-12">
					<textarea name="txtDesc" id="summernote" class="form-control" cols="30" rows="5"><?=getPageWithSlug($cate, "page_contents")?></textarea>
				</div>
			</div><!-- .form-group -->

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn mw-md btn-primary">Save</button>
				</div>
			</div><!-- .form-group -->

		</form>
	</div>
</div>