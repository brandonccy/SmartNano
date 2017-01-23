<?php
$txtDesc=$_POST["txtDesc"];$txtDesc = str_replace("'", '&#39;', $txtDesc);
if (isset($_POST['txtDesc'])&&!empty($_POST["txtDesc"])) {
	$txtDesc=$_POST["txtDesc"];$txtDesc = str_replace("'", '&#39;', $txtDesc);
}

$resultUpdateData=updateTable("db_pages", "page_contents", $txtDesc, "page_slug", $cate, true);

if($resultUpdateData==true){
	$systemSucces="Data updated.";
}else{
	$systemError="Invalid data entry.";
}
?>