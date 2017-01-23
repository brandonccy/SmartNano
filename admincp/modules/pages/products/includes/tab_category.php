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
    <a href="?page=<?=$page?>&cate=<?=$cate?>&action=addCategory">
    	<button type="button" class="btn btn-success" ><i class="fa fa-pencil"></i> Add New Category</button>
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
				<th>Status</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$strNumber="";$comment_count=0;
			$result=mysqli_query($con, "SELECT * FROM db_products_cate WHERE cate_stat<>'3'".$cate_idSQL." ORDER BY cate_id DESC");
			while($row=mysqli_fetch_array($result)){
				$strNumber++;
			?>
			<tr>
				<td><?=$strNumber?></td>

				<td>
          <?=$row["cate_name"]?>
          <input type="hidden" id="category-<?=$row["cate_id"]?>" value="<?=$row["cate_name"]?>">    
        </td>
				
        <td>
				<?php if($row["cate_display"]==0){?>
					<button type="button" class="btn btn-default btn-xs" onclick="showCateStatus('<?=$row["cate_id"]?>', '<?=$row["cate_display"]?>', document.getElementById('category-<?=$row["cate_id"]?>').value)">Saved</button>
				<?php }else{ ?>
					<button type="button" class="btn btn-success btn-xs" onclick="showCateStatus('<?=$row["cate_id"]?>', '<?=$row["cate_display"]?>', document.getElementById('category-<?=$row["cate_id"]?>').value)">Published</button>
				<?php } ?>
				</td>

				<td>
					<a href="?page=<?=$page?>&cate=<?=$cate?>&action=editCategory&id=<?=$row["cate_id"]?>">
						<button type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
					</a>
          <button type="button" class="btn btn-danger btn-xs" onclick="deleteCatePost('<?=$row["cate_id"]?>')"><i class="fa fa-trash"></i></button>
				</td>

			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>

<form method="post" action="" id="deleteCategoryPost">
<input type="hidden" name="form" value="pages-product-deleteCategory">
<input type="hidden" name="itemId" id="itemCateId" value="">
</form>

<script>
function deleteCatePost(itemID){
  document.getElementById('itemCateId').value=itemID;
  swal({
    title: "Warning",   
    type: 'warning',
    text: "Are you sure to delete this category?",
    showCancelButton: true,   
    confirmButtonColor: "#DD6B55",   
    confirmButtonText: "Yes", 
    closeOnConfirm: true,
    html: true
  }, function(){
    document.getElementById('deleteCategoryPost').submit();
  });
}

function showCateStatus(postID, statusID, postTitle){
  document.getElementById('cateUpdate-Title').innerHTML = postTitle;
  document.getElementById('txtCateStatus').value = statusID;
  document.getElementById('txtCateID').value = postID;
  $("#categoryUpdate").modal();
}
</script>

<style>
#postPreview .modal-dialog {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
#postPreview .modal-content {
  height: auto;
  min-height: 100%;
  border-radius: 0;
}
</style>

<!-- postPreview -->
<div class="modal fade" id="categoryUpdate" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Product Status #<span><code id="cateUpdate-Title">title</code></span></h4>
      </div>
      <div class="modal-body" id="post_status">
        <div class="widget-body">
          <div class="row">
            <form action="" class="form-horizontal" method="post">

              <input type="hidden" name="form" value="pages-products-updateCateStatus">
              <input type="hidden" id="txtCateID" name="txtID">
              <select class="form-control" id="txtCateStatus" name="txtStatus">
                <option value="1">Publish</option>
                <option value="0">un-Publish</option>
              </select>

              <center>
              <br><br>
              <button type="submit" class="btn btn-success">Update Status</button>
              </center>

            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>

<!-- Update Session Customer Details for Billing - Basic -->
<div class="modal fade" id="loadingProcessing" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
      </div>

      <div  id="loadingProcessing">
        <div class="modal-body">

          <style>
          #fountainG{
            position:relative;
            width:234px;
            height:28px;
            margin:auto;
          }

          .fountainG{
            position:absolute;
            top:0;
            background-color:rgb(0,0,0);
            width:28px;
            height:28px;
            animation-name:bounce_fountainG;
              -o-animation-name:bounce_fountainG;
              -ms-animation-name:bounce_fountainG;
              -webkit-animation-name:bounce_fountainG;
              -moz-animation-name:bounce_fountainG;
            animation-duration:1.5s;
              -o-animation-duration:1.5s;
              -ms-animation-duration:1.5s;
              -webkit-animation-duration:1.5s;
              -moz-animation-duration:1.5s;
            animation-iteration-count:infinite;
              -o-animation-iteration-count:infinite;
              -ms-animation-iteration-count:infinite;
              -webkit-animation-iteration-count:infinite;
              -moz-animation-iteration-count:infinite;
            animation-direction:normal;
              -o-animation-direction:normal;
              -ms-animation-direction:normal;
              -webkit-animation-direction:normal;
              -moz-animation-direction:normal;
            transform:scale(.3);
              -o-transform:scale(.3);
              -ms-transform:scale(.3);
              -webkit-transform:scale(.3);
              -moz-transform:scale(.3);
            border-radius:19px;
              -o-border-radius:19px;
              -ms-border-radius:19px;
              -webkit-border-radius:19px;
              -moz-border-radius:19px;
          }

          #fountainG_1{
            left:0;
            animation-delay:0.6s;
              -o-animation-delay:0.6s;
              -ms-animation-delay:0.6s;
              -webkit-animation-delay:0.6s;
              -moz-animation-delay:0.6s;
          }

          #fountainG_2{
            left:29px;
            animation-delay:0.75s;
              -o-animation-delay:0.75s;
              -ms-animation-delay:0.75s;
              -webkit-animation-delay:0.75s;
              -moz-animation-delay:0.75s;
          }

          #fountainG_3{
            left:58px;
            animation-delay:0.9s;
              -o-animation-delay:0.9s;
              -ms-animation-delay:0.9s;
              -webkit-animation-delay:0.9s;
              -moz-animation-delay:0.9s;
          }

          #fountainG_4{
            left:88px;
            animation-delay:1.05s;
              -o-animation-delay:1.05s;
              -ms-animation-delay:1.05s;
              -webkit-animation-delay:1.05s;
              -moz-animation-delay:1.05s;
          }

          #fountainG_5{
            left:117px;
            animation-delay:1.2s;
              -o-animation-delay:1.2s;
              -ms-animation-delay:1.2s;
              -webkit-animation-delay:1.2s;
              -moz-animation-delay:1.2s;
          }

          #fountainG_6{
            left:146px;
            animation-delay:1.35s;
              -o-animation-delay:1.35s;
              -ms-animation-delay:1.35s;
              -webkit-animation-delay:1.35s;
              -moz-animation-delay:1.35s;
          }

          #fountainG_7{
            left:175px;
            animation-delay:1.5s;
              -o-animation-delay:1.5s;
              -ms-animation-delay:1.5s;
              -webkit-animation-delay:1.5s;
              -moz-animation-delay:1.5s;
          }

          #fountainG_8{
            left:205px;
            animation-delay:1.64s;
              -o-animation-delay:1.64s;
              -ms-animation-delay:1.64s;
              -webkit-animation-delay:1.64s;
              -moz-animation-delay:1.64s;
          }



          @keyframes bounce_fountainG{
            0%{
            transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }

          @-o-keyframes bounce_fountainG{
            0%{
            -o-transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            -o-transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }

          @-ms-keyframes bounce_fountainG{
            0%{
            -ms-transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            -ms-transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }

          @-webkit-keyframes bounce_fountainG{
            0%{
            -webkit-transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            -webkit-transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }

          @-moz-keyframes bounce_fountainG{
            0%{
            -moz-transform:scale(1);
              background-color:rgb(0,0,0);
            }

            100%{
            -moz-transform:scale(.3);
              background-color:rgb(255,255,255);
            }
          }
          </style>
          <div id="fountainG">
            <div id="fountainG_1" class="fountainG"></div>
            <div id="fountainG_2" class="fountainG"></div>
            <div id="fountainG_3" class="fountainG"></div>
            <div id="fountainG_4" class="fountainG"></div>
            <div id="fountainG_5" class="fountainG"></div>
            <div id="fountainG_6" class="fountainG"></div>
            <div id="fountainG_7" class="fountainG"></div>
            <div id="fountainG_8" class="fountainG"></div>
          </div>
          <center>
          Please wait while loading...
          </center>
        </div>
      </div>

    </div>
  </div>
  <!-- Basic Single Date Picker -->
  <script type="text/javascript">

  </script>
</div>
  
<?php } ?>