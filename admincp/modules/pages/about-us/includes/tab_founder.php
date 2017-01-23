<header class="widget-header">
	<a href="?page=<?=$page?>&cate=<?=$cate?>">
		<button type="button" class="close">&times;</button>
	</a>
	<h4 class="widget-title">Founder Details</h4>
</header><!-- .widget-header -->
<hr class="widget-separator">
<div class="widget-body">

	<form action="#" class="form-horizontal" method="post">
	
		<input type="hidden" name="form" value="pages-about-us-founder">

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Founder Name</label>
			<div class="col-sm-10">
				<input type="text" name="txtName" placeholder="Mark Zuckerberg" class="form-control" value="<?=getSystem("founder_name")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Image URL</label>
			<div class="col-sm-10">
				<?php
				if(getSystem("founder_cover")=="https://placeholdit.imgix.net/~text?txtsize=33&txt=512%C3%97512&w=512&h=512"){
					$txtCover="";
				}else{
					$txtCover=getSystem("founder_cover");
				}
				?>
				<input type="text" name="txtImage" class="form-control" value="<?=$txtCover?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Tagline</label>
			<div class="col-sm-10">
				<input type="text" name="txtTag" placeholder="CEO & Founder" class="form-control" value="<?=getSystem("founder_tag")?>">
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2">Description</label>
			<div class="col-sm-10">
				<textarea name="txtDesc" id="txtDesc" class="form-control" cols="30" rows="5"><?=getSystem("founder_desc")?></textarea>
			</div>
		</div><!-- .form-group -->

		<div class="form-group">
			<label for="control-demo-1" class="col-sm-2"></label>
			<div class="col-sm-10">
				<button type="submit" class="btn mw-md btn-primary">Save</button>
			</div>
		</div><!-- .form-group -->
	
	</form>

</div><!-- .widget-body -->