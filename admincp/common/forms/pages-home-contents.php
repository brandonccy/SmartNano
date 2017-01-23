<?php
$txtIcon1=$_POST["txtIcon1"];$txtIcon1 = str_replace("'", '&#39;', $txtIcon1);
if (isset($_POST['txtIcon1'])&&!empty($_POST["txtIcon1"])) {
	$txtIcon1=$_POST["txtIcon1"];$txtIcon1 = str_replace("'", '&#39;', $txtIcon1);
}

$txtTitle1=$_POST["txtTitle1"];$txtTitle1 = str_replace("'", '&#39;', $txtTitle1);
if (isset($_POST['txtTitle1'])&&!empty($_POST["txtTitle1"])) {
	$txtTitle1=$_POST["txtTitle1"];$txtTitle1 = str_replace("'", '&#39;', $txtTitle1);
}

$txtContent1=$_POST["txtContent1"];$txtContent1 = str_replace("'", '&#39;', $txtContent1);
if (isset($_POST['txtContent1'])&&!empty($_POST["txtContent1"])) {
	$txtContent1=$_POST["txtContent1"];$txtContent1 = str_replace("'", '&#39;', $txtContent1);
}

$resultUpdateData=updateTable("db_home_contents", "item_icon", $txtIcon1, "item_id", 1, true);
$resultUpdateData=updateTable("db_home_contents", "item_name", $txtTitle1, "item_id", 1, true);
$resultUpdateData=updateTable("db_home_contents", "item_desc", $txtContent1, "item_id", 1, true);

$txtIcon2=$_POST["txtIcon2"];$txtIcon1 = str_replace("'", '&#39;', $txtIcon2);
if (isset($_POST['txtIcon2'])&&!empty($_POST["txtIcon2"])) {
	$txtIcon2=$_POST["txtIcon2"];$txtIcon2 = str_replace("'", '&#39;', $txtIcon2);
}

$txtTitle2=$_POST["txtTitle2"];$txtTitle2 = str_replace("'", '&#39;', $txtTitle2);
if (isset($_POST['txtTitle2'])&&!empty($_POST["txtTitle2"])) {
	$txtTitle2=$_POST["txtTitle2"];$txtTitle2 = str_replace("'", '&#39;', $txtTitle2);
}

$txtContent2=$_POST["txtContent2"];$txtContent2 = str_replace("'", '&#39;', $txtContent2);
if (isset($_POST['txtContent2'])&&!empty($_POST["txtContent1"])) {
	$txtContent2=$_POST["txtContent2"];$txtContent2 = str_replace("'", '&#39;', $txtContent2);
}

$resultUpdateData=updateTable("db_home_contents", "item_icon", $txtIcon2, "item_id", 2, true);
$resultUpdateData=updateTable("db_home_contents", "item_name", $txtTitle2, "item_id", 2, true);
$resultUpdateData=updateTable("db_home_contents", "item_desc", $txtContent2, "item_id", 2, true);

$txtIcon3=$_POST["txtIcon3"];$txtIcon3 = str_replace("'", '&#39;', $txtIcon3);
if (isset($_POST['txtIcon3'])&&!empty($_POST["txtIcon3"])) {
	$txtIcon3=$_POST["txtIcon3"];$txtIcon3 = str_replace("'", '&#39;', $txtIcon3);
}

$txtTitle3=$_POST["txtTitle3"];$txtTitle3 = str_replace("'", '&#39;', $txtTitle3);
if (isset($_POST['txtTitle3'])&&!empty($_POST["txtTitle3"])) {
	$txtTitle3=$_POST["txtTitle3"];$txtTitle3 = str_replace("'", '&#39;', $txtTitle3);
}

$txtContent3=$_POST["txtContent3"];$txtContent3 = str_replace("'", '&#39;', $txtContent3);
if (isset($_POST['txtContent3'])&&!empty($_POST["txtContent3"])) {
	$txtContent3=$_POST["txtContent3"];$txtContent3 = str_replace("'", '&#39;', $txtContent3);
}

$resultUpdateData=updateTable("db_home_contents", "item_icon", $txtIcon3, "item_id", 3, true);
$resultUpdateData=updateTable("db_home_contents", "item_name", $txtTitle3, "item_id", 3, true);
$resultUpdateData=updateTable("db_home_contents", "item_desc", $txtContent3, "item_id", 3, true);

$txtIcon4=$_POST["txtIcon4"];$txtIcon4 = str_replace("'", '&#39;', $txtIcon4);
if (isset($_POST['txtIcon4'])&&!empty($_POST["txtIcon4"])) {
	$txtIcon4=$_POST["txtIcon4"];$txtIcon4 = str_replace("'", '&#39;', $txtIcon4);
}

$txtTitle4=$_POST["txtTitle4"];$txtTitle4 = str_replace("'", '&#39;', $txtTitle4);
if (isset($_POST['txtTitle4'])&&!empty($_POST["txtTitle4"])) {
	$txtTitle4=$_POST["txtTitle4"];$txtTitle4 = str_replace("'", '&#39;', $txtTitle4);
}

$txtContent4=$_POST["txtContent4"];$txtContent4 = str_replace("'", '&#39;', $txtContent4);
if (isset($_POST['txtContent4'])&&!empty($_POST["txtContent4"])) {
	$txtContent4=$_POST["txtContent4"];$txtContent4 = str_replace("'", '&#39;', $txtContent4);
}

$resultUpdateData=updateTable("db_home_contents", "item_icon", $txtIcon4, "item_id", 4, true);
$resultUpdateData=updateTable("db_home_contents", "item_name", $txtTitle4, "item_id", 4, true);
$resultUpdateData=updateTable("db_home_contents", "item_desc", $txtContent4, "item_id", 4, true);

$txtIcon5=$_POST["txtIcon5"];$txtIcon5 = str_replace("'", '&#39;', $txtIcon5);
if (isset($_POST['txtIcon5'])&&!empty($_POST["txtIcon5"])) {
	$txtIcon5=$_POST["txtIcon5"];$txtIcon5 = str_replace("'", '&#39;', $txtIcon5);
}

$txtTitle5=$_POST["txtTitle5"];$txtTitle5 = str_replace("'", '&#39;', $txtTitle5);
if (isset($_POST['txtTitle5'])&&!empty($_POST["txtTitle5"])) {
	$txtTitle5=$_POST["txtTitle5"];$txtTitle5 = str_replace("'", '&#39;', $txtTitle5);
}

$txtContent5=$_POST["txtContent5"];$txtContent5 = str_replace("'", '&#39;', $txtContent5);
if (isset($_POST['txtContent5'])&&!empty($_POST["txtContent5"])) {
	$txtContent5=$_POST["txtContent5"];$txtContent5 = str_replace("'", '&#39;', $txtContent5);
}

$resultUpdateData=updateTable("db_home_contents", "item_icon", $txtIcon5, "item_id", 5, true);
$resultUpdateData=updateTable("db_home_contents", "item_name", $txtTitle5, "item_id", 5, true);
$resultUpdateData=updateTable("db_home_contents", "item_desc", $txtContent5, "item_id", 5, true);

$txtIcon6=$_POST["txtIcon6"];$txtIcon6 = str_replace("'", '&#39;', $txtIcon6);
if (isset($_POST['txtIcon6'])&&!empty($_POST["txtIcon6"])) {
	$txtIcon6=$_POST["txtIcon6"];$txtIcon6 = str_replace("'", '&#39;', $txtIcon6);
}

$txtTitle6=$_POST["txtTitle6"];$txtTitle6 = str_replace("'", '&#39;', $txtTitle6);
if (isset($_POST['txtTitle6'])&&!empty($_POST["txtTitle6"])) {
	$txtTitle6=$_POST["txtTitle6"];$txtTitle6 = str_replace("'", '&#39;', $txtTitle6);
}

$txtContent6=$_POST["txtContent6"];$txtContent6 = str_replace("'", '&#39;', $txtContent6);
if (isset($_POST['txtContent6'])&&!empty($_POST["txtContent6"])) {
	$txtContent6=$_POST["txtContent6"];$txtContent6 = str_replace("'", '&#39;', $txtContent6);
}

$resultUpdateData=updateTable("db_home_contents", "item_icon", $txtIcon6, "item_id", 6, true);
$resultUpdateData=updateTable("db_home_contents", "item_name", $txtTitle6, "item_id", 6, true);
$resultUpdateData=updateTable("db_home_contents", "item_desc", $txtContent6, "item_id", 6, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
$currentURl="?page=pages&cate=home";
?>