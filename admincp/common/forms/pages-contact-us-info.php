<?php
$txtPhone=$_POST["txtPhone"];$txtPhone = str_replace("'", '&#39;', $txtPhone);
if (isset($_POST['txtPhone'])&&!empty($_POST["txtPhone"])) {
	$txtPhone=$_POST["txtPhone"];$txtPhone = str_replace("'", '&#39;', $txtPhone);
}
$txtEmail=$_POST["txtEmail"];$txtEmail = str_replace("'", '&#39;', $txtEmail);
if (isset($_POST['txtEmail'])&&!empty($_POST["txtEmail"])) {
	$txtEmail=$_POST["txtEmail"];$txtEmail = str_replace("'", '&#39;', $txtEmail);
}
$resultUpdateData=updateTable("db_admin", "front_email", $txtEmail, "admin_id", "1", true);
$resultUpdateData=updateTable("db_admin", "front_phone", $txtPhone, "admin_id", "1", true);
$systemSucces="Data added.";
$currentURl="?page=pages&cate=contact-us";
?>