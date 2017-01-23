<?php
if($action<>""){
	include("action/".$action.".php");
}else{
?>

<?php
$cate_id="";
if((isset($_GET["cate_id"])&&!empty($_GET["cate_id"]))){
  $cate_id=$_GET["cate_id"];
}
$cate_idSQL="";
if($cate_id<>""){
  $cate_idSQL=" AND cate_id='$cate_id'";
}
?>

<form method="get" action="">
<?php if($page<>""){ ?><input type="hidden" name="page" value="<?=$page?>"><?php } ?>
<?php if($cate<>""){ ?><input type="hidden" name="cate" value="<?=$cate?>"><?php } ?>
<?php if($action<>""){ ?><input type="hidden" name="action" value="<?=$action?>"><?php } ?>
<?php if($id<>""){ ?><input type="hidden" name="id" value="<?=$id?>"><?php } ?>

<div class="row">
  <div class="col-sm-3">
    <a href="?page=<?=$page?>&cate=<?=$cate?>&action=addPartner">
    	<button type="button" class="btn btn-success" ><i class="fa fa-pencil"></i> Add New Partner</button>
    </a>
  </div>
</div>
</form>

<br><br>

<div class="table-responsive">

	<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th></th>
				<th>Name</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$strNumber="";$comment_count=0;
			$result=mysqli_query($con, "SELECT * FROM db_partners WHERE partner_stat<>'3'".$cate_idSQL." ORDER BY partner_id DESC");
			while($row=mysqli_fetch_array($result)){
				$strNumber++;
			?>
			<tr>
				<td><?=$strNumber?></td>

				<td>
          		<?=$row["partner_name"]?>
          		<input type="hidden" id="product-<?=$row["partner_id"]?>" value="<?=$row["partner_name"]?>">    
        		</td>
        		<td>
        		<?=$row["partner_city"]?>
        		</td>
        		<td>
        		<?=$row["partner_state"]?>
        		</td>
        		<td>
        		<?=$row["partner_country"]?>
        		</td>

				<td>
					<a href="?page=<?=$page?>&cate=<?=$cate?>&action=editPartner&id=<?=$row["partner_id"]?>">
						<button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
					</a>
          			<button type="button" class="btn btn-danger btn-xs" onclick="deletePartnerPost('<?=$row["partner_id"]?>')"><i class="fa fa-trash"></i></button>
				</td>

			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>

<form method="post" action="" id="deletePartnerPost">
<input type="hidden" name="form" value="pages-partners-deletePartner">
<input type="hidden" name="itemId" id="itemPartnerId" value="">
</form>

<script>
function deletePartnerPost(itemID){
  document.getElementById('itemPartnerId').value=itemID;
  swal({
    title: "Warning",   
    type: 'warning',
    text: "Are you sure to delete this partner?",
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes", 
    closeOnConfirm: true,
    html: true
  }, function(){
    document.getElementById('deletePartnerPost').submit();
  });
}
</script>

<?php } ?>