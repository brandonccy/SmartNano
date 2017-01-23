<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
	$result=mysqli_query($con, "UPDATE db_products_cate SET cate_name='$txtTitle' WHERE cate_id='$id'");
}
$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
if (isset($_POST['txtURLSlug'])&&!empty($_POST["txtURLSlug"])) {
	$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
	$result=mysqli_query($con, "UPDATE db_products_cate SET cate_slug='$txtURLSlug' WHERE cate_id='$id'");
}
?>
<script>window.location="";</script>