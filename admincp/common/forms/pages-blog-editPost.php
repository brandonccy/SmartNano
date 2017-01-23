<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
$txtKeywords=$_POST["txtKeywords"];$txtKeywords = str_replace("'", '&#39;', $txtKeywords);

if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}
if (isset($_POST['txtURLSlug'])&&!empty($_POST["txtURLSlug"])) {
	$txtURLSlug=$_POST["txtURLSlug"];$txtURLSlug = str_replace("'", '&#39;', $txtURLSlug);
}
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}
if (isset($_POST['txtImage'])&&!empty($_POST["txtImage"])) {
	$txtImage=$_POST["txtImage"];$txtImage = str_replace("'", '&#39;', $txtImage);
}
if (isset($_POST['txtKeywords'])&&!empty($_POST["txtKeywords"])) {
	$txtKeywords=$_POST["txtKeywords"];$txtKeywords = str_replace("'", '&#39;', $txtKeywords);
}
$txtPostType=$_POST["txtPostType"];$txtPostType = str_replace("'", '&#39;', $txtPostType);
if (isset($_POST['txtPostType'])&&!empty($_POST["txtPostType"])) {
	$txtPostType=$_POST["txtPostType"];$txtPostType = str_replace("'", '&#39;', $txtPostType);
}
$resultUpdateData=updateTable("db_blog_post", "cate_id", $txtPostType, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "post_title", $txtTitle, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "post_contents", $txtContent, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "post_slug", $txtURLSlug, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "post_cover", $txtImage, "post_id", $id, true);

$resultUpdateData=updateTable("db_blog_post", "post_pdate", $Today, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "post_ptime", $Time, "post_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
?>