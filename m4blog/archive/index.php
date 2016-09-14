<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php") 
?>

<?php include($m4blog."header.php"); ?>

<?php include($m4blog."archive/postLoop.php"); ?>

<?php include($m4blog."footer.php"); ?>