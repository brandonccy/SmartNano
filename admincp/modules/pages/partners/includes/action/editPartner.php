<?php
$txtTitle=getDataTable("db_partners", "partner_id", $id, "partner_name");
$txtContent=getDataTable("db_partners", "partner_id", $id, "partner_desc");
$txtCountry=getDataTable("db_partners", "partner_id", $id, "partner_country");
$txtState=getDataTable("db_partners", "partner_id", $id, "partner_state");
$txtCity=getDataTable("db_partners", "partner_id", $id, "partner_city");
?>
<a href="?page=<?=$page?>&cate=<?=$cate?>">
	<button type="button" class="btn btn-default" ><i class="fa fa-arrow-left"></i> Back to Partners Management</button>
</a>
<br><br>

<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Edit Partner Details</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post" data-parsley-validate>
	
		<input type="hidden" name="form" value="pages-partners-editPartner">
		<input type="hidden" name="token" value="<?=$Token?>">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Title</label>
			<div class="col-sm-10">
				<input type="text" name="txtTitle" id="txtTitle" class="form-control" value="<?=$txtTitle?>" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">City</label>
			<div class="col-sm-10">
				<input type="text" name="txtCity" id="txtCity" class="form-control" value="<?=$txtCity?>" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">State</label>
			<div class="col-sm-10">
				<input type="text" name="txtState" id="txtState" class="form-control" value="<?=$txtState?>" required="required">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Country</label>
			<div class="col-sm-10">
				<select name="txtCountry" id="txtCountry" class="form-control">
					<?php
					$result=getTable("db_countries", "WHERE currencyCode<>'' ORDER BY countryName");
					foreach ($result as $row) {
					?>
						<option value="<?=$row["countryName"]?>"
							<?php if($txtCountry==$row["countryName"]&&$txtCountry<>""){ ?> selected="selected"<?php } ?>
							<?php if("Malaysia"==$row["countryName"]&&$txtCountry==""){ ?> selected="selected"<?php } ?>
						>
						<?=$row["countryName"]?>
						</option>
					<?php } ?>
				</select>
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-6" class="col-sm-12">Description/Address</label>
			<textarea class="input-block-level form-control" id="FCKeditor1" name="txtContent" rows="18"><?=$txtContent?></textarea>
        </div>

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-3"><button type="submit" class="btn mw-md btn-primary">Save</button></label>
			<div class="col-sm-4">
				
			</div>
		</div><!-- .form-group -->
	
	</form>

</div><!-- .widget-body -->
</form>