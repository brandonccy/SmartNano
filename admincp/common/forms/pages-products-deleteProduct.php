<?php
$itemId=$_POST["itemId"];$itemId = str_replace("'", '&#39;', $itemId);
if (isset($_POST['itemId'])&&!empty($_POST["itemId"])) {
	$itemId=$_POST["itemId"];$itemId = str_replace("'", '&#39;', $itemId);
}
$result=updateTable("db_products", "product_display", '0', "product_id", $itemId);
$result=updateTable("db_products", "product_stat", '3', "product_id", $itemId);
$currentURl="?page=pages&cate=products";
?>