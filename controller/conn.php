<?php
/*
TItle: Database & Global Connection Handler
Authoer: Brandon Chong
Version: 3.0
Description: This conn.php file contains not just mysql database connections, 
also you can configure all your views or pages connections.
General Configurations of your web applications
*/

/* AWS Credential Setup */
/* Make sure AWS PHP SDK is installed to root */
$awsKey="AKIAISHB3TGPHJS6IGQA";
$awsSecret="9cLb4XP3qaXWNYZtun0ZR/OfHyJalCi0WwNpA7C0";
$awsRegion="ap-southeast-1";
$awsS3ImageBucket="img.vlken.com";
// AWS
$config = [
	's3' => [  
		'key' => $awsKey,
    'region'  => $awsRegion,
    'version' => 'latest',
		'secret' => $awsSecret,
		'bucket' => $awsS3ImageBucket
	]
];

/* Live Database Connection */
$conn_mysql_host="aa16v3pw7v67tv8.cn3bwky93pfs.ap-southeast-1.rds.amazonaws.com";
$conn_mysql_username="vlkenDB";
$conn_mysql_password="oEOGALjT659DiM82vf8VZK9yNF6";
$conn_mysql_database="ebdb";

/* Development Database Connection */
$conn_mysql_host_dev="localhost";
$conn_mysql_username_dev="root";
$conn_mysql_password_dev="1234";
$conn_mysql_database_dev="vlken_db";

$systemDemo=""; /* If website need demo site set to "yes" */

/* Here you can put your Localhost/Development Enviroment endpoint, so can be isolated from live database. */
$localhost_dev="www.vlken";

/* Include PHP Variables and defines. */
$languageArray=array("en-gb", "zh-cn");
$lang="";
if(isset($_GET["lang"])&&!empty($_GET["lang"])){
	$lang=$_GET["lang"];$ref="";
	if(isset($_GET["ref"])&&!empty($_GET["ref"])){
		$ref=$_GET["ref"];
	}
	if(in_array($lang, $languageArray)){
		setcookie("webbycms_language", $lang ,time()+(86400 * 30) * 12, "/");
		if($ref<>""){ ?><script>window.location="/<?=$ref?>";</script><? }
	}
}
require("define.php");
/* 
Define to use localhost development database and is the web application use any database 
Put 'yes' to enable, 'no' to disable.
*/
$useLocalMySql="yes";$useDataTable="yes";
$con="";
if($useDataTable=="yes"){
	if($useLocalMySql=="yes"){
		if($_SERVER["HTTP_HOST"]==$localhost_dev){
			$conn_mysql_host=$conn_mysql_host_dev;
			$conn_mysql_username=$conn_mysql_username_dev;
			$conn_mysql_password=$conn_mysql_password_dev;
			$conn_mysql_database=$conn_mysql_database_dev;
		}
	}
	if($conn_mysql_username==""||$conn_mysql_password==""||$conn_mysql_database==""){
		die('Database Config Error!');
	}else{
		$con = mysqli_connect($conn_mysql_host, $conn_mysql_username , $conn_mysql_password, $conn_mysql_database);
		if (!$con){
			die('Could not connect: ' . mysql_error());
		}
	}
}

/* Set your application timezone. */
date_default_timezone_set('Asia/Singapore');
?>