<?php
$txtComment=$_POST["txtComment"];$txtComment = str_replace("'", '&#39;', $txtComment);
if (isset($_POST['txtComment'])&&!empty($_POST["txtComment"])) {
	$txtComment=$_POST["txtComment"];$txtComment = str_replace("'", '&#39;', $txtComment);
}
$txtID=$_POST["txtID"];$txtID = str_replace("'", '&#39;', $txtID);
if (isset($_POST['txtID'])&&!empty($_POST["txtID"])) {
	$txtID=$_POST["txtID"];$txtID = str_replace("'", '&#39;', $txtID);
}
$txtMessage=$_POST["txtMessage"];$txtMessage = str_replace("'", '&#39;', $txtMessage);
if (isset($_POST['txtMessage'])&&!empty($_POST["txtMessage"])) {
	$txtMessage=$_POST["txtMessage"];$txtMessage = str_replace("'", '&#39;', $txtMessage);
}

$token=$Token;
$getToken=getToken($token);
if($getToken==true){
	$inputToken=inputToken($token);
	if($inputToken==true){
		
		$result=mysqli_query($con, "INSERT INTO db_blog_post_comments 
			(comment_date, comment_time, comment_contents, comment_name, comment_email, blog_id, reply_id, comment_token, comment_display) 
			VALUES 
			('$Today', '$Time', '$txtMessage', '".getSystem("website_title")."', '".getSystem("front_email")."', '".$txtID."', '".$txtComment."', '$token', '1')");
		$newInsertID=mysqli_insert_id($con);

		$systemSucces="Data added.";
	}else{
		$systemError="Invalid Token (Insert)";
	}	
}else{
	$systemError="Invalid Token (Query)";
}
?>