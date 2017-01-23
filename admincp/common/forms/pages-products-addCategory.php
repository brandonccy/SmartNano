<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}
$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
if (isset($_POST['txtURLSlug'])&&!empty($_POST["txtURLSlug"])) {
	$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
}
$getToken=getToken($token);
if($getToken==true){
	$inputToken=inputToken($token);
	if($inputToken==true){
		$result=mysqli_query($con, "INSERT INTO db_products_cate 
			(cate_name, cate_slug) 
			VALUES 
			('$txtTitle', '$txtURLSlug')");
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