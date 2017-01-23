<?php
if (isset($_POST['txtURL'])&&!empty($_POST["txtURL"])) {
	$txtURL=$_POST["txtURL"];$txtURL = str_replace("'", '&#39;', $txtURL);
}
$resultUpdateData=updateTable("db_gallery", "image_link", $txtURL, "image_id", $id, true);

if (isset($_POST['txtTarget'])&&!empty($_POST["txtTarget"])) {
	$txtTarget=$_POST["txtTarget"];$txtTarget = str_replace("'", '&#39;', $txtTarget);
}
$resultUpdateData=updateTable("db_gallery", "image_target", $txtTarget, "image_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
$currentURl="?page=sliders";
?>