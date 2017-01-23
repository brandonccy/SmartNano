<?php
$image_id=$_POST["image_id"];$image_id = str_replace("'", '&#39;', $image_id);
if (isset($_POST['image_id'])&&!empty($_POST["image_id"])) {
	$image_id=$_POST["image_id"];$image_id = str_replace("'", '&#39;', $image_id);
}

$image_sort=$_POST["image_sort"];$image_sort = str_replace("'", '&#39;', $image_sort);
if (isset($_POST['image_sort'])&&!empty($_POST["image_sort"])) {
	$image_sort=$_POST["image_sort"];$image_sort = str_replace("'", '&#39;', $image_sort);
}

$result=updateTable("db_gallery", "image_sort", $image_sort, "image_id", $image_id);
$currentURl="?page=pages&cate=blog&action=manageBlogGallery&id=".$id;
?>