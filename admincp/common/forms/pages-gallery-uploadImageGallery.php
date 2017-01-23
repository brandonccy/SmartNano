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
$setFileURL="";$setFileThumbURL="";
if(isset($_FILES['txtFile']['name'])&&!empty($_FILES['txtFile']['name'])){
	$extension = explode('.', $_FILES['txtFile']['name']);
	$extension = strtolower(end($extension));

	$key = md5(uniqid());
	$salt = substr($key, 0, 10);

	$temp_file_name = "{$key}.{$extension}";
	$temp_thumb_name = "thumb_"."{$key}.{$extension}";
	$temp_file_path = "../../files/{$temp_file_name}";

	$upload = $s3->upload(
		$config['s3']['bucket'],
		$temp_file_name,
		fopen($_FILES['txtFile']['tmp_name'], 'rb'), 
		'public-read'
	);
	$setFileURL="https://s3-ap-southeast-1.amazonaws.com/".$awsS3ImageBucket."/".$temp_file_name;

	move_uploaded_file($_FILES['txtFile']['tmp_name'], $temp_file_path);

	$image = new ResizePhoto();
	$image->load($temp_file_path);
	$image->resizeToWidth(128);
	$image->save($temp_file_path);

	$upload = $s3->upload(
		$config['s3']['bucket'],
		$temp_thumb_name,
		fopen($temp_file_path, 'rb'), 
		'public-read'
	);
	$setFileThumbURL="https://s3-ap-southeast-1.amazonaws.com/".$awsS3ImageBucket."/".$temp_thumb_name;

	unlink($temp_file_path);
	
	$getToken=getToken($token);
	if($getToken==true){
		$inputToken=inputToken($token);
		if($inputToken==true){
			$result=mysqli_query($con, "INSERT INTO db_gallery (image_name, image_url, image_thumb, page_slug) VALUES ('', '$setFileURL', '$setFileThumbURL', 'gallery')");
			$newInsertID=mysqli_insert_id($con);
			if($newInsertID==0){
				$systemError="mysql insert invalid.";
			}else{
				$systemSucces="Data added.";
				$currentURl="?page=pages&cate=".$cate."#gallery";
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