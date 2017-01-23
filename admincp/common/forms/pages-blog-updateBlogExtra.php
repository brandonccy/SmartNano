<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}

$txtURL=$_POST["txtURL"];$txtURL = str_replace("'", '&#39;', $txtURL);
if (isset($_POST['txtURL'])&&!empty($_POST["txtURL"])) {
	$txtURL=$_POST["txtURL"];$txtURL = str_replace("'", '&#39;', $txtURL);
}

$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}

$resultUpdateData=updateTable("db_blog_post", "extra_link", $txtURL, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "extra_desc", $txtContent, "post_id", $id, true);
$resultUpdateData=updateTable("db_blog_post", "extra_title", $txtTitle, "post_id", $id, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
?>