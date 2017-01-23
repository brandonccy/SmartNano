<a href="?page=<?=$page?>&cate=<?=$cate?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Feature List</button>
</a>
<br><br>

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Edit Feature</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post" data-parsley-validate>
	
		<input type="hidden" name="form" value="pages-home-editFeature">
		<input type="hidden" name="token" value="<?=$Token?>">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Title</label>
			<div class="col-sm-10">
				<input type="text" name="txtTitle" id="txtTitle" class="form-control" value="<?=getDataTable("db_feature", "feature_id", $id, "feature_name")?>" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Image URL</label>
			<div class="col-sm-10">
				<input type="text" name="txtImage" id="control-demo-1" placeholder="Image URL here..." class="form-control" value="<?=getDataTable("db_feature", "feature_id", $id, "feature_image")?>" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Description</label>
			<div class="col-sm-10">
				<textarea name="txtContent" id="txtContent" class="form-control" cols="30" rows="5" required="required"><?=getDataTable("db_feature", "feature_id", $id, "feature_desc")?></textarea>
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Save</button></label>
			<div class="col-sm-4">
				
			</div>
		</div><!-- .form-group -->
	
	</form>

</div><!-- .widget-body -->
</form>