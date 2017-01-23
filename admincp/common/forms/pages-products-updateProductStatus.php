<?php
$txtID=$_POST["txtID"];$txtID = str_replace("'", '&#39;', $txtID);
if (isset($_POST['txtID'])&&!empty($_POST["txtID"])) {
	$txtID=$_POST["txtID"];$txtID = str_replace("'", '&#39;', $txtID);
}

$txtStatus=$_POST["txtStatus"];$txtStatus = str_replace("'", '&#39;', $txtStatus);
if (isset($_POST['txtStatus'])&&!empty($_POST["txtStatus"])) {
	$txtStatus=$_POST["txtStatus"];$txtStatus = str_replace("'", '&#39;', $txtStatus);
}
$result=mysqli_query($con, "UPDATE db_products SET product_display='$txtStatus' WHERE product_id='$txtID'");
?>
<script>window.location="#<?=$txtStatus?>";</script>