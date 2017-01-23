<?php
session_start();
/*
TItle: WebbyCMS
Authoer: Brandon Chong
Version: 1.0
*/
?>
<?php
$module="";
if(isset($_GET["module"])&&!empty($_GET["module"])){
	$module=$_GET["module"];
}
$data="";
if(isset($_GET["data"])&&!empty($_GET["data"])){
	$data=$_GET["data"];
}
if($module=="visitor"){
	setcookie("webbycms_visitor", $data ,time()+(86400 * 30) * 12, "/");
}else{?>
	<?php require_once('controller/conn.php'); ?>
	<?php require_once('controller/functions.php'); ?>
	<?php require_once('controller/common.php'); ?>
	<?php require_once('controller/form.php'); ?>
	<?php if($form==""){ ?>
		<?php require_once("includes/htmlstart.php"); ?>
		<?php require_once("includes/views.php"); ?>
		<?php require_once("includes/javascripts.php"); ?>
		<?php require_once("pages/includes/layout/modals.php"); ?>
		<?php require_once("includes/htmlend.php"); ?>
		<?php include_once('controller/visitor.php'); ?>
	<?php } ?>
<?php } ?>