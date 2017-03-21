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
$awsKey="-";
$awsSecret="-";
$awsRegion="ap-southeast-1";
$awsS3ImageBucket="aws bucket name";
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
$conn_mysql_host="localhost";
$conn_mysql_username="database username";
$conn_mysql_password="database password";
$conn_mysql_database="database name";

/* Development Database Connection */
$conn_mysql_host_dev="localhost";
$conn_mysql_username_dev="root";
$conn_mysql_password_dev="1234";
$conn_mysql_database_dev="local_db";

$systemDemo=""; /* If website need demo site set to "yes" */

/* Here you can put your Localhost/Development Enviroment endpoint, so can be isolated from live database. */
$localhost_dev="";

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