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

$resultUpdateData=updateTable("db_feature", "feature_name", $txtTitle, "feature_id", $id, true);
$resultUpdateData=updateTable("db_feature", "feature_desc", $txtContent, "feature_id", $id, true);
$resultUpdateData=updateTable("db_feature", "feature_image", $txtImage, "feature_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
$currentURl="?page=pages&cate=teachers";
?>