<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}
$txtSKU=$_POST["txtSKU"];$txtSKU = str_replace("'", '&#39;', $txtSKU);
if (isset($_POST['txtSKU'])&&!empty($_POST["txtSKU"])) {
	$txtSKU=$_POST["txtSKU"];$txtSKU = str_replace("'", '&#39;', $txtSKU);
}
$txtPackage=$_POST["txtPackage"];$txtPackage = str_replace("'", '&#39;', $txtPackage);
if (isset($_POST['txtPackage'])&&!empty($_POST["txtPackage"])) {
	$txtPackage=$_POST["txtPackage"];$txtPackage = str_replace("'", '&#39;', $txtPackage);
}


$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
if (isset($_POST['txtImage'])&&!empty($_POST["txtImage"])) {
	$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
}
$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
if (isset($_POST['txtURLSlug'])&&!empty($_POST["txtURLSlug"])) {
	$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
}

$txtPostType=$_POST["txtPostType"];$txtPostType = str_replace("'", '&#39;', $txtPostType);
if (isset($_POST['txtPostType'])&&!empty($_POST["txtPostType"])) {
	$txtPostType=$_POST["txtPostType"];$txtPostType = str_replace("'", '&#39;', $txtPostType);
}

$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}

$txtUsage=$_POST["txtUsage"];$txtUsage = str_replace("'", '&#39;', $txtUsage);
if (isset($_POST['txtUsage'])&&!empty($_POST["txtUsage"])) {
	$txtUsage=$_POST["txtUsage"];$txtUsage = str_replace("'", '&#39;', $txtUsage);
}

$getToken=getToken($token);
if($getToken==true){
	$inputToken=inputToken($token);
	if($inputToken==true){
		$result=mysqli_query($con, "INSERT INTO db_products 
			(product_date, product_time, product_name, product_slug, product_contents, admin_id, product_cover, product_token, cate_id, product_SKU, product_tags, product_specs) 
			VALUES 
			('$Today', '$Time', '$txtTitle', '$txtURLSlug', '$txtContent', '".$adminlogin."', '$txtImage', '$token', '$txtPostType', '$txtSKU', '$txtPackage', '$txtUsage')");
		$newInsertID=mysqli_insert_id($con);
		if($newInsertID>0){
			$systemSucces="Data added.";
			$currentURl="?page=pages&cate=products";
		}else{
			$systemError="Invalid Token (Query-1)";
			$currentURl="?page=pages&cate=products";
		}
	}else{
		$systemError="Invalid Token (Insert)";
	}	
}else{
	$systemError="Invalid Token (Query-2)";
}
?>