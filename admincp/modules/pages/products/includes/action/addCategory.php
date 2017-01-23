<a href="?page=<?=$page?>&cate=<?=$cate?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Categories Management</button>
</a>
<br><br>

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Create New Category Details</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post" data-parsley-validate>
	
		<input type="hidden" name="form" value="pages-products-addCategory">
		<input type="hidden" name="token" value="<?=$Token?>">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Title</label>
			<div class="col-sm-10">
				<input type="text" name="txtTitle" id="txtTitle" class="form-control" value="" required="required" onkeyup="convertToSlug(this.value)" onchange="convertToSlug(this.value)">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">URL Slug</label>
			<div class="col-sm-10">
				<input type="text" name="txtURLSlug" id="txtURLSlug" class="form-control" value="" required="required" readonly="readonly">
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

<script>
function convertToSlug(strValue){
	var visitorName = "-";
	var myOldString = strValue;
	var myNewString = myOldString.replace(/ /g, visitorName);
	var myNewString = myNewString.replace(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/g, visitorName);
	document.getElementById("txtURLSlug").value=myNewString.toLowerCase();
}
convertToSlug(document.getElementById("txtTitle").value);
</script>