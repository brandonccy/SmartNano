<?php
$txtPostType=getDataTable("db_products", "product_id", $id, "cate_id");
$txtTitle=getDataTable("db_products", "product_id", $id, "product_name");
$txtSKU=getDataTable("db_products", "product_id", $id, "product_SKU");
$txtPackage=getDataTable("db_products", "product_id", $id, "product_tags");
$txtUsage=getDataTable("db_products", "product_id", $id, "product_specs");

$txtCurrency=getDataTable("db_products", "product_id", $id, "product_currency");
$txtPrice=getDataTable("db_products", "product_id", $id, "product_price");
$txtOfferPrice=getDataTable("db_products", "product_id", $id, "product_offer_price");
$txtRate=getDataTable("db_products", "product_id", $id, "product_rate");
$txtImage=getDataTable("db_products", "product_id", $id, "product_cover");
$txtURLSlug=getDataTable("db_products", "product_id", $id, "product_slug");
$txtContent=getDataTable("db_products", "product_id", $id, "product_contents");
$nextProductId=$id;
?>
<a href="?page=<?=$page?>&cate=<?=$cate?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Products Management</button>
</a>
<br><br>

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Edit Product Details</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post" data-parsley-validate>
	
		<input type="hidden" name="form" value="pages-products-editProduct">
		<input type="hidden" name="token" value="<?=$Token?>">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">产品照片</label>
			<div class="col-sm-10">
				<input type="text" name="txtImage" id="control-demo-1" required="required" value="<?=$txtImage?>" placeholder="Image URL here..." class="form-control">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">产品名字</label>
			<div class="col-sm-10">
				<input type="text" name="txtTitle" id="txtTitle" class="form-control" value="<?=$txtTitle?>" required="required" onkeyup="convertToSlug(this.value)" onchange="convertToSlug(this.value)">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-6" class="col-sm-12">产品简介</label>
			<textarea class="input-block-level form-control" id="FCKeditor1" name="txtContent" rows="18"><?=$txtContent?></textarea>
        </div>

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">代码</label>
			<div class="col-sm-10">
				<input type="text" name="txtSKU" id="txtSKU" class="form-control" value="<?=$txtSKU?>" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-6" class="col-sm-12">使用方式</label>
			<textarea class="input-block-level form-control" id="txtUsage" name="txtUsage" rows="18"><?=$txtUsage?></textarea>
        </div>

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">包装</label>
			<div class="col-sm-10">
				<input type="text" name="txtPackage" id="txtPackage" class="form-control" value="<?=$txtPackage?>" required="required">
			</div>
		</div><!-- .form-group -->

		<?php $useThis=""; if($useThis=="yes"){ ?>
		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Retail Price</label>
			<div class="col-sm-10">
				<label class="col-sm-2">
					<select class="form-control" name="txtCurrency" onchange="updateCurrency(this.value);">
						<option value="MYR"<?php if($txtCurrency=='MYR'){ ?> selected="selected"<?php } ?>>MYR</option>
						<option value="USD"<?php if($txtCurrency=='USD'){ ?> selected="selected"<?php } ?>>USD</option>
					</select>
				</label>
				<div class="col-sm-10">
					<input type="text" name="txtPrice" id="txtPrice" class="form-control" value="<?=$txtPrice?>" required="required">
				</div>
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Offer Price</label>
			<div class="col-sm-10">
				<label class="col-sm-2">
					<div id="txtOfferCurrenct" class="text-right"></div>
				</label>
				<div class="col-sm-10">
					<input type="text" name="txtOfferPrice" id="txtOfferPrice" class="form-control" value="<?=$txtOfferPrice?>">
				</div>
			</div>
		</div><!-- .form-group -->

		<div class="form-group" style="display:none;">
			<label for="control-demo-6" class="col-sm-2">Rating</label>
			<div id="control-demo-6" class="col-sm-4">
				<select class="form-control" name="txtRate">
					<option value="0"<?php if($txtRate==0){ ?> selected="selected"<?php } ?>>0</option>
					<option value="1"<?php if($txtRate==1){ ?> selected="selected"<?php } ?>>1</option>
					<option value="2"<?php if($txtRate==2){ ?> selected="selected"<?php } ?>>2</option>
					<option value="3"<?php if($txtRate==3){ ?> selected="selected"<?php } ?>>3</option>
					<option value="4"<?php if($txtRate==4){ ?> selected="selected"<?php } ?>>4</option>
					<option value="5"<?php if($txtRate==5){ ?> selected="selected"<?php } ?>>5</option>
				</select>
			</div>
		</div><!-- .form-group -->
		<?php } ?>

		<?php
		$result=getTable("db_products_cate", "WHERE cate_stat<>'3'");
		if(count($result)>0){
		?>
		<div class="form-group">
			<label for="control-demo-6" class="col-sm-2">产品分类</label>
			<div id="control-demo-6" class="col-sm-10">
				<select class="form-control" name="txtPostType">
					<option value="0"<?php if($txtPostType==0){ ?> selected="selected"<?php } ?>>No Cateogry</option>
					<?php foreach ($result as $row) { ?>
					<option value="<?=$row["cate_id"]?>"<?php if($txtPostType==$row["cate_id"]){ ?> selected="selected"<?php } ?>><?=$row["cate_name"]?></option>
					<?php }?>
				</select>
			</div>
		</div><!-- .form-group -->
		<?php } ?>

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">URL Slug</label>
			<div class="col-sm-10">
				<input type="text" name="txtURLSlug" id="txtURLSlug" class="form-control" value="<?=$txtURLSlug?>" required="required" readonly="readonly">
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

<script>
function updateCurrency(strCurrency){
	document.getElementById('txtOfferCurrenct').innerHTML=strCurrency;
}
function convertToSlug(strValue){
	var visitorName = "-";
	var myOldString = strValue;
	var myNewString = myOldString.replace(/ /g, visitorName);
	var myNewString = myNewString.replace(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/g, visitorName);
	document.getElementById("txtURLSlug").value=myNewString.toLowerCase();
}
convertToSlug(document.getElementById("txtTitle").value);
updateCurrency('MYR');
</script>