<?php
$txtName=$_POST["txtName"];$txtName = str_replace("'", '&#39;', $txtName);
if (isset($_POST['txtName'])&&!empty($_POST["txtName"])) {
	$txtName=$_POST["txtName"];$txtName = str_replace("'", '&#39;', $txtName);
}
$txtTag=$_POST["txtTag"];$txtTag = str_replace("'", '&#39;', $txtTag);
if (isset($_POST['txtTag'])&&!empty($_POST["txtTag"])) {
	$txtTag=$_POST["txtTag"];$txtTag = str_replace("'", '&#39;', $txtTag);
}
$txtDesc=$_POST["txtDesc"];$txtDesc = str_replace("'", '&#39;', $txtDesc);
if (isset($_POST['txtDesc'])&&!empty($_POST["txtDesc"])) {
	$txtDesc=$_POST["txtDesc"];$txtDesc = str_replace("'", '&#39;', $txtDesc);
}
$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
if (isset($_POST['txtImage'])&&!empty($_POST["txtImage"])) {
	$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
}

$id=1;
$resultUpdateData=updateTable("db_admin", "founder_name", $txtName, "admin_id", $id, true);
$resultUpdateData=updateTable("db_admin", "founder_tag", $txtTag, "admin_id", $id, true);
$resultUpdateData=updateTable("db_admin", "founder_desc", $txtDesc, "admin_id", $id, true);
$resultUpdateData=updateTable("db_admin", "founder_cover", $txtImage, "admin_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
?>