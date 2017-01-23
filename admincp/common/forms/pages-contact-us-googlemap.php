<?php
$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}
$resultUpdateData=updateTable("db_admin", "front_google_map_embed", $txtContent, "admin_id", "1", true);
$systemSucces="Data updated.";
?>