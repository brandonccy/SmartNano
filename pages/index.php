<?php
/*
Title: Pages Index
Author: Brandon Chong
Version: 2.1
*/

// Template Default set include
if($page==""||$page=="index"||$page=="home"){
	include("pages/templates/index.html");
}elseif($page<>""){
	$pageFileSystem="pages/templates/".$page.".html";
	if(file_exists($pageFileSystem)){
		include($pageFileSystem);
	}else{
		include("templates/error.html");
	}
}
?>