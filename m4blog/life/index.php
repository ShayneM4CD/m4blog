<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php"); 
	
	include($m4blog."header.php");
	if(isset($_SESSION['user'])) {
		include($m4blog."life/lifeMenu.php");
	}
	include($m4blog."footer.php"); 
?>