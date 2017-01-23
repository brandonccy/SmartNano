<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}

$txtSubName=$_POST["txtSubName"];$txtSubName = str_replace("'", '&#39;', $txtSubName);
if (isset($_POST['txtSubName'])&&!empty($_POST["txtSubName"])) {
	$txtSubName=$_POST["txtSubName"];$txtSubName = str_replace("'", '&#39;', $txtSubName);
}

$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}

$resultUpdateData=updateTable("db_testimonial", "testimonial_name", $txtTitle, "testimonial_id", $id, true);
$resultUpdateData=updateTable("db_testimonial", "testimonial_sub_name", $txtSubName, "testimonial_id", $id, true);
$resultUpdateData=updateTable("db_testimonial", "testimonial_content", $txtContent, "testimonial_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
?>