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
$setFileURL="";
if(isset($_FILES['txtFile']['name'])&&!empty($_FILES['txtFile']['name'])){
	$extension = explode('.', $_FILES['txtFile']['name']);
	$extension = strtolower(end($extension));

	$key = md5(uniqid());
	$salt = substr($key, 0, 10);

	$temp_file_name = "{$key}.{$extension}";
	$temp_force_name = "{$key}.{$extension}";

	$upload = $s3->upload(
		$config['s3']['bucket'],
		$temp_file_name,
		fopen($_FILES['txtFile']['tmp_name'], 'rb'), 
		'public-read'
	);
	$setFileURL="https://s3-ap-southeast-1.amazonaws.com/".$awsS3ImageBucket."/".$temp_file_name;

	$getToken=getToken($token);
	if($getToken==true){
		$inputToken=inputToken($token);
		if($inputToken==true){
			$result=mysqli_query($con, "INSERT INTO db_gallery (image_name, image_url, page_slug, blog_id) VALUES ('', '$setFileURL', '$cate', '$id')");
			$newInsertID=mysqli_insert_id($con);
			if($newInsertID==0){
				$systemError="mysql insert invalid.";
			}else{
				$systemSucces="Data added.";
				$currentURl="?page=pages&cate=".$cate."&action=".$action."&id=".$id."#gallery";
			}
		}else{
			$systemError="Invalid Token (Insert)";
		}	
	}else{
		$systemError="Invalid Token (Query)";
	}
}else{
	$systemError="File upload error.";
}
?>