<?php
$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
if (isset($_POST['txtTitle'])&&!empty($_POST["txtTitle"])) {
	$txtTitle=$_POST["txtTitle"];$txtTitle = str_replace("'", '&#39;', $txtTitle);
}

$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
if (isset($_POST['txtContent'])&&!empty($_POST["txtContent"])) {
	$txtContent=$_POST["txtContent"];$txtContent = str_replace("'", '&#39;', $txtContent);
}

$txtCountry=$_POST["txtCountry"];$txtCountry = str_replace("'", '&#39;', $txtCountry);
if (isset($_POST['txtCountry'])&&!empty($_POST["txtCountry"])) {
	$txtCountry=$_POST["txtCountry"];$txtCountry = str_replace("'", '&#39;', $txtCountry);
}

$txtState=$_POST["txtState"];$txtState = str_replace("'", '&#39;', $txtState);
if (isset($_POST['txtState'])&&!empty($_POST["txtState"])) {
	$txtState=$_POST["txtState"];$txtState = str_replace("'", '&#39;', $txtState);
}

$txtCity=$_POST["txtCity"];$txtCity = str_replace("'", '&#39;', $txtCity);
if (isset($_POST['txtCity'])&&!empty($_POST["txtCity"])) {
	$txtCity=$_POST["txtCity"];$txtCity = str_replace("'", '&#39;', $txtCity);
}

$getToken=getToken($token);
if($getToken==true){
	$inputToken=inputToken($token);
	if($inputToken==true){
		$result=mysqli_query($con, "INSERT INTO db_partners 
			(partner_name, partner_desc, partner_token, partner_country, partner_state, partner_city) 
			VALUES 
			('$txtTitle', '$txtContent', '$token', '$txtCountry', '$txtState', '$txtCity')");
		$newInsertID=mysqli_insert_id($con);
		$systemSucces="Data added.";
		$currentURl="?page=pages&cate=partners";
	}else{
		$systemError="Invalid Token (Insert)";
	}	
}else{
	$systemError="Invalid Token (Query)";
}
?>