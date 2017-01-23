<?php
$txtMon=$_POST["txtMon"];$txtMon = str_replace("'", '&#39;', $txtMon);
if (isset($_POST['txtMon'])&&!empty($_POST["txtMon"])) {
	$txtMon=$_POST["txtMon"];$txtMon = str_replace("'", '&#39;', $txtMon);
}
$txtTue=$_POST["txtTue"];$txtTue = str_replace("'", '&#39;', $txtTue);
if (isset($_POST['txtTue'])&&!empty($_POST["txtTue"])) {
	$txtTue=$_POST["txtTue"];$txtTue = str_replace("'", '&#39;', $txtTue);
}
$txtWed=$_POST["txtWed"];$txtWed = str_replace("'", '&#39;', $txtWed);
if (isset($_POST['txtWed'])&&!empty($_POST["txtWed"])) {
	$txtWed=$_POST["txtWed"];$txtWed = str_replace("'", '&#39;', $txtWed);
}
$txtThu=$_POST["txtThu"];$txtThu = str_replace("'", '&#39;', $txtThu);
if (isset($_POST['txtThu'])&&!empty($_POST["txtThu"])) {
	$txtThu=$_POST["txtThu"];$txtThu = str_replace("'", '&#39;', $txtThu);
}
$txtFri=$_POST["txtFri"];$txtFri = str_replace("'", '&#39;', $txtFri);
if (isset($_POST['txtFri'])&&!empty($_POST["txtFri"])) {
	$txtFri=$_POST["txtFri"];$txtFri = str_replace("'", '&#39;', $txtFri);
}
$txtSat=$_POST["txtSat"];$txtSat = str_replace("'", '&#39;', $txtSat);
if (isset($_POST['txtSat'])&&!empty($_POST["txtSat"])) {
	$txtSat=$_POST["txtSat"];$txtSat = str_replace("'", '&#39;', $txtSat);
}
$txtSun=$_POST["txtSun"];$txtSun = str_replace("'", '&#39;', $txtSun);
if (isset($_POST['txtSun'])&&!empty($_POST["txtSun"])) {
	$txtSun=$_POST["txtSun"];$txtSun = str_replace("'", '&#39;', $txtSun);
}

$resultUpdateData=updateTable("db_admin", "front_bhour_mon", $txtMon, "admin_id", "1", true);
$resultUpdateData=updateTable("db_admin", "front_bhour_tue", $txtTue, "admin_id", "1", true);
$resultUpdateData=updateTable("db_admin", "front_bhour_wed", $txtWed, "admin_id", "1", true);
$resultUpdateData=updateTable("db_admin", "front_bhour_thu", $txtThu, "admin_id", "1", true);
$resultUpdateData=updateTable("db_admin", "front_bhour_fri", $txtFri, "admin_id", "1", true);
$resultUpdateData=updateTable("db_admin", "front_bhour_sat", $txtSat, "admin_id", "1", true);
$resultUpdateData=updateTable("db_admin", "front_bhour_sun", $txtSun, "admin_id", "1", true);
$systemSucces="Data added.";
$currentURl="?page=pages&cate=contact-us";
?>