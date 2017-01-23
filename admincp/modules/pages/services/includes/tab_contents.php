<?php
if($action<>""){
	include("action/".$action.".php");
}else{
?>

<a href="?page=<?=$page?>&cate=<?=$cate?>&action=addService">
	<button type="button" class="btn btn-success" ><i class="fa fa-pencil"></i> Add New Service</button>
</a>
<br><br>

<div class="table-responsive">

	<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th></th>
				<th>Title</th>
				<th width="70%">Description</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$strNumber="";
			$result=mysqli_query($con, "SELECT * FROM db_services WHERE service_stat<>'3'");
			while($row=mysqli_fetch_array($result)){
				$strNumber++;
				?>
				<tr>
					<td><?=$strNumber?></td>
					<td><?=$row["service_name"]?></td>
					<td><?=$row["service_desc"]?></td>
					<td>
						<a href="?page=<?=$page?>&cate=<?=$cate?>&action=editService&id=<?=$row["service_id"]?>">
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
						</a>
						<button type="button" class="btn btn-warning btn-xs" onclick="deleteItem('<?=$row["service_id"]?>')"><i class="fa fa-trash"></i></button>
					</td>

				</tr>
			<?php } ?>
		</tbody>
	</table>

</div>

<form method="post" action="" id="deleteItem">
<input type="hidden" name="form" value="pages-services-deleteService">
<input type="hidden" name="itemId" id="itemId" value="">
</form>

<script>
function deleteItem(itemID){
	document.getElementById('itemId').value=itemID;
	swal({
		title: "Warning",   
		type: 'warning',
		text: "Are you sure to delete this item?",
		showCancelButton: true,   
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Yes", 
		closeOnConfirm: true,
		html: true
	}, function(){
		document.getElementById('deleteItem').submit();
	});
}
</script>

<?php } ?>