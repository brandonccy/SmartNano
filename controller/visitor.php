<?php
if(!empty($_COOKIE["webbycms_visitor"])&&$_COOKIE["webbycms_visitor"]<>""){
	$result=updateVisitor($_COOKIE["webbycms_visitor"]);
}else{
	$uniqueInsert=uniqid();
	$result=newVisitor($uniqueInsert);
	?>
	<script src="/assets/custom.js"></script>
	<script>visitor('<?=$uniqueInsert?>', 'noredirect');</script>
	<?
}
?>