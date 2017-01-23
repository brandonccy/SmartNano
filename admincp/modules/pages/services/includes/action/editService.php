<a href="?page=<?=$page?>&cate=<?=$cate?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Service List</button>
</a>
<br><br>

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Edit Service</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post" data-parsley-validate>
	
		<input type="hidden" name="form" value="pages-service-editService">
		<input type="hidden" name="token" value="<?=$Token?>">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Name</label>
			<div class="col-sm-10">
				<input type="text" name="txtTitle" id="txtTitle" class="form-control" value="<?=getDataTable("db_services", "service_id", $id, "service_name")?>" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Image URL</label>
			<div class="col-sm-10">
				<input type="text" name="txtImage" id="control-demo-1" placeholder="Image URL here..." value="<?=getDataTable("db_services", "service_id", $id, "service_image")?>" class="form-control">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-6" class="col-sm-2">Box Style</label>
			<div id="control-demo-6" class="col-sm-10">
				<select class="form-control" required="required" name="txtStyle">
					<?php
					$styleData=getDataTable("db_services", "service_id", $id, "service_style");
					?>
					<option value="1"<?php if($styleData==1){ ?> selected="selected"<? } ?>>Orange</option>
					<option value="2"<?php if($styleData==2){ ?> selected="selected"<? } ?>>Yellow</option>
					<option value="3"<?php if($styleData==3){ ?> selected="selected"<? } ?>>Pink</option>
					<option value="4"<?php if($styleData==4){ ?> selected="selected"<? } ?>>Blue</option>
				</select>
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Description</label>
			<div class="col-sm-10">
				<textarea name="txtContent" id="txtContent" class="form-control" cols="30" rows="5" required="required"><?=getDataTable("db_services", "service_id", $id, "service_desc")?></textarea>
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