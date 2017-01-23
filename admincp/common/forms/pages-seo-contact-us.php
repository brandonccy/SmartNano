<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
$txtDesc=$_POST["txtDesc"];$txtDesc = str_replace("'", '&#39;', $txtDesc);
$txtShortDesc=$_POST["txtShortDesc"];$txtShortDesc = str_replace("'", '&#39;', $txtShortDesc);
$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
$txtKeywords=$_POST["txtKeywords"];$txtKeywords = str_replace("'", '&#39;', $txtKeywords);

if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}
if (isset($_POST['txtDesc'])&&!empty($_POST["txtDesc"])) {
	$txtDesc=$_POST["txtDesc"];$txtDesc = str_replace("'", '&#39;', $txtDesc);
}
if (isset($_POST['txtShortDesc'])&&!empty($_POST["txtShortDesc"])) {
	$txtShortDesc=$_POST["txtShortDesc"];$txtShortDesc = str_replace("'", '&#39;', $txtShortDesc);
}
if (isset($_POST['txtImage'])&&!empty($_POST["txtImage"])) {
	$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
}
if (isset($_POST['txtKeywords'])&&!empty($_POST["txtKeywords"])) {
	$txtKeywords=$_POST["txtKeywords"];$txtKeywords = str_replace("'", '&#39;', $txtKeywords);
}

$resultUpdateData=updateTable("db_pages", "page_title", $txtTitle, "page_slug", $cate, true);
$resultUpdateData=updateTable("db_pages", "page_short_desc", $txtShortDesc, "page_slug", $cate, true);
$resultUpdateData=updateTable("db_pages", "page_desc", $txtDesc, "page_slug", $cate, true);
$resultUpdateData=updateTable("db_pages", "page_cover", $txtImage, "page_slug", $cate, true);
$resultUpdateData=updateTable("db_pages", "page_pdate", $Today, "page_slug", $cate, true);
$resultUpdateData=updateTable("db_pages", "page_ptime", $Time, "page_slug", $cate, true);
$resultUpdateData=updateTable("db_pages", "page_keywords", $txtKeywords, "page_slug", $cate, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
?>