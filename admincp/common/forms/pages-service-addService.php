<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}

$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}

$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
if (isset($_POST['txtImage'])&&!empty($_POST["txtImage"])) {
	$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
}

$txtStyle=$_POST["txtStyle"];$txtStyle = str_replace("'", '&#39;', $txtStyle);
if (isset($_POST['txtStyle'])&&!empty($_POST["txtStyle"])) {
	$txtStyle=$_POST["txtStyle"];$txtStyle = str_replace("'", '&#39;', $txtStyle);
}

$getToken=getToken($token);
if($getToken==true){
	$inputToken=inputToken($token);
	if($inputToken==true){
		$result=mysqli_query($con, "INSERT INTO db_services 
			(service_name, service_image, service_desc, service_style) 
			VALUES 
			('$txtTitle', '$txtImage', '$txtContent', '$txtStyle')");
		$newInsertID=mysqli_insert_id($con);
		$systemSucces="Data added.";
		$currentURl="?page=pages&cate=services";
	}else{
		$systemError="Invalid Token (Insert)";
	}	
}else{
	$systemError="Invalid Token (Query)";
}
?>