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

$resultUpdateData=updateTable("db_services", "service_name", $txtTitle, "service_id", $id, true);
$resultUpdateData=updateTable("db_services", "service_desc", $txtContent, "service_id", $id, true);
$resultUpdateData=updateTable("db_services", "service_image", $txtImage, "service_id", $id, true);
$resultUpdateData=updateTable("db_services", "service_style", $txtStyle, "service_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
$currentURl="?page=pages&cate=services";
?>