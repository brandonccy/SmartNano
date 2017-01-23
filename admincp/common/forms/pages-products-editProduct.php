<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
	$result=mysqli_query($con, "UPDATE db_products SET product_name='$txtTitle' WHERE product_id='$id'");
}
$txtSKU=$_POST["txtSKU"];$txtSKU = str_replace("'", '&#39;', $txtSKU);
if (isset($_POST['txtSKU'])&&!empty($_POST["txtSKU"])) {
	$txtSKU=$_POST["txtSKU"];$txtSKU = str_replace("'", '&#39;', $txtSKU);
	$result=mysqli_query($con, "UPDATE db_products SET product_SKU='$txtSKU' WHERE product_id='$id'");
}
$txtPackage=$_POST["txtPackage"];$txtPackage = str_replace("'", '&#39;', $txtPackage);
if (isset($_POST['txtPackage'])&&!empty($_POST["txtPackage"])) {
	$txtPackage=$_POST["txtPackage"];$txtPackage = str_replace("'", '&#39;', $txtPackage);
	$result=mysqli_query($con, "UPDATE db_products SET product_tags='$txtPackage' WHERE product_id='$id'");
}


$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
if (isset($_POST['txtImage'])&&!empty($_POST["txtImage"])) {
	$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
	$result=mysqli_query($con, "UPDATE db_products SET product_cover='$txtImage' WHERE product_id='$id'");
}
$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
if (isset($_POST['txtURLSlug'])&&!empty($_POST["txtURLSlug"])) {
	$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
	$result=mysqli_query($con, "UPDATE db_products SET product_slug='$txtURLSlug' WHERE product_id='$id'");
}

$txtPostType=$_POST["txtPostType"];$txtPostType = str_replace("'", '&#39;', $txtPostType);
if (isset($_POST['txtPostType'])&&!empty($_POST["txtPostType"])) {
	$txtPostType=$_POST["txtPostType"];$txtPostType = str_replace("'", '&#39;', $txtPostType);
	$result=mysqli_query($con, "UPDATE db_products SET cate_id='$txtPostType' WHERE product_id='$id'");
}

$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
	$result=mysqli_query($con, "UPDATE db_products SET product_contents='$txtContent' WHERE product_id='$id'");
}

$txtUsage=$_POST["txtUsage"];$txtUsage = str_replace("'", '&#39;', $txtUsage);
if (isset($_POST['txtUsage'])&&!empty($_POST["txtUsage"])) {
	$txtUsage=$_POST["txtUsage"];$txtUsage = str_replace("'", '&#39;', $txtUsage);
	$result=mysqli_query($con, "UPDATE db_products SET product_specs='$txtUsage' WHERE product_id='$id'");
}
?>
<script>window.location="";</script>