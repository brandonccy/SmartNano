<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}

$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}

$txtCountry=$_POST["txtCountry"];$txtCountry = str_replace("'", '&#39;', $txtCountry);
if (isset($_POST['txtCountry'])&&!empty($_POST["txtCountry"])) {
	$txtCountry=$_POST["txtCountry"];$txtCountry = str_replace("'", '&#39;', $txtCountry);
}

$txtState=$_POST["txtState"];$txtState = str_replace("'", '&#39;', $txtState);
if (isset($_POST['txtState'])&&!empty($_POST["txtState"])) {
	$txtState=$_POST["txtState"];$txtState = str_replace("'", '&#39;', $txtState);
}

$txtCity=$_POST["txtCity"];$txtCity = str_replace("'", '&#39;', $txtCity);
if (isset($_POST['txtCity'])&&!empty($_POST["txtCity"])) {
	$txtCity=$_POST["txtCity"];$txtCity = str_replace("'", '&#39;', $txtCity);
}

$resultUpdateData=updateTable("db_partners", "partner_name", $txtTitle, "partner_id", $id, true);
$resultUpdateData=updateTable("db_partners", "partner_desc", $txtContent, "partner_id", $id, true);
$resultUpdateData=updateTable("db_partners", "partner_country", $txtCountry, "partner_id", $id, true);
$resultUpdateData=updateTable("db_partners", "partner_state", $txtState, "partner_id", $id, true);
$resultUpdateData=updateTable("db_partners", "partner_city", $txtCity, "partner_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
$currentURl="?page=pages&cate=partners";
?>