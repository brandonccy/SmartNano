<?php
use Aws\S3\S3Client;
require ('../../vendor/autoload.php');

// S3
$s3 = S3Client::factory([
	'version' => $config['s3']['version'], 
	'region' => $config['s3']['region'],
	'credentials' => array(	
		'key' => $config['s3']['key'], 
		'secret' => $config['s3']['secret']
	)
]);

$itemId=$_POST["itemId"];$itemId = str_replace("'", '&#39;', $itemId);
if (isset($_POST['itemId'])&&!empty($_POST["itemId"])) {
	$itemId=$_POST["itemId"];$itemId = str_replace("'", '&#39;', $itemId);
}

$bucketFile=getImage($itemId, "image_url");
$temp_file_name=str_replace("https://s3-ap-southeast-1.amazonaws.com/".$awsS3ImageBucket."/", "", $bucketFile);
$s3->deleteObject([
	'Bucket' => $config["s3"]['bucket'],
	'Key' => $temp_file_name
]);

if(getImage($itemId, "image_thumb")<>""){
	$bucketFile=getImage($itemId, "image_thumb");
	$temp_file_name=str_replace("https://s3-ap-southeast-1.amazonaws.com/".$awsS3ImageBucket."/", "", $bucketFile);
	$s3->deleteObject([
		'Bucket' => $config["s3"]['bucket'],
		'Key' => $temp_file_name
	]);
}

$result=updateTable("db_gallery", "image_stat", '3', "image_id", $itemId);
$currentURl="?page=sliders";
?>