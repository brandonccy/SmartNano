<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}

$txtSubName=$_POST["txtSubName"];$txtSubName = str_replace("'", '&#39;', $txtSubName);
if (isset($_POST['txtSubName'])&&!empty($_POST["txtSubName"])) {
	$txtSubName=$_POST["txtSubName"];$txtSubName = str_replace("'", '&#39;', $txtSubName);
}

$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}


$getToken=getToken($token);
if($getToken==true){
	$inputToken=inputToken($token);
	if($inputToken==true){
		$result=mysqli_query($con, "INSERT INTO db_testimonial 
			(testimonial_name, testimonial_sub_name, testimonial_content) 
			VALUES 
			('$txtTitle', '$txtSubName', '$txtContent')");
		$newInsertID=mysqli_insert_id($con);
		$systemSucces="Data added.";
		$currentURl="?page=pages&cate=about-us";
	}else{
		$systemError="Invalid Token (Insert)";
	}	
}else{
	$systemError="Invalid Token (Query)";
}
?>