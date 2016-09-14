<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php"); 

	include($m4blog."header.php");
	include($m4blog."account/welcome.php");
	include($m4blog."footer.php");
?>