<?php
/*
TItle: Incoming Hooks for Simple Header Injections
Authoer: Brandon Chong
Version: 1.0
*/

$module="";
if(isset($_GET["module"])&&!empty($_GET["module"])){
	$module=$_GET["module"];
}
$data="";
if(isset($_GET["data"])&&!empty($_GET["data"])){
	$data=$_GET["data"];
}

/* Basic Login & Logout WebbyCMS Injection */
if($module=="login"&&$data<>""){
	setcookie("webbycms_login", $data ,time()+(86400 * 30) * 12, "/");
}
if($module=="logout"){
	setcookie("webbycms_login", $data ,time()-(86400 * 30) * 12, "/");
}
if($module=="visitor"){
	setcookie("webbycms_visitor", $data ,time()-(86400 * 30) * 12, "/");
}
if($module=="startdemo"&&$data=="yes"){
	setcookie("systemDemoStart", $data ,time()+(86400 * 30) * 12, "/");
	?><script>window.location="/";</script><?
}
if($module=="startdemo"&&$data=="no"){
	setcookie("systemDemoStart", $data ,time()-(86400 * 30) * 12, "/");
	?><script>window.location="/";</script><?
}
?>