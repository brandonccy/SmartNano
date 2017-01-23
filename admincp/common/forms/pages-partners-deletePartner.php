<?php
$itemId=$_POST["itemId"];$itemId = str_replace("'", '&#39;', $itemId);
if (isset($_POST['itemId'])&&!empty($_POST["itemId"])) {
	$itemId=$_POST["itemId"];$itemId = str_replace("'", '&#39;', $itemId);
}
$result=updateTable("db_partners", "partner_stat", '3', "partner_id", $itemId);
$currentURl="?page=pages&cate=partners";
?>