<?php
if($action<>""){
	include("action/".$action.".php");
}else{
?>

<a href="?page=<?=$page?>&cate=<?=$cate?>&action=addTestimonial">
	<button type="button" class="btn btn-success" ><i class="fa fa-pencil"></i> Add New Testimonial</button>
</a>
<br><br>

<div class="table-responsive">

	<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th></th>
				<th>Name</th>
				<th>Sub-Desc</th>
				<th width="50%">Testimonial Content</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$strNumber="";
			$result=mysqli_query($con, "SELECT * FROM db_testimonial WHERE testimonial_stat<>'3'");
			while($row=mysqli_fetch_array($result)){
				$strNumber++;
			?>
			<tr>
				<td><?=$strNumber?></td>
				<td><?=$row["testimonial_name"]?></td>
				<td><?=$row["testimonial_sub_name"]?></td>
				<td><?=$row["testimonial_content"]?></td>
				<td>
					<a href="?page=<?=$page?>&cate=<?=$cate?>&action=editTestimonial&id=<?=$row["testimonial_id"]?>">
						<button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
					</a>
					<button type="button" class="btn btn-warning btn-xs" onclick="deleteItem('<?=$row["testimonial_id"]?>')"><i class="fa fa-trash"></i></button>
				</td>

			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>

<form method="post" action="" id="deleteItem">
<input type="hidden" name="form" value="pages-about-us-deleteTestimonial">
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