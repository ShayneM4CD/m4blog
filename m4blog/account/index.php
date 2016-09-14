<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php") 
?>

<?php include($m4blog."header.php"); ?>

<!--  ▼ ▼  -->

<?php 

	if(isset($_SESSION['user'])) {
		
		if($_SESSION['user']=='Shayne') {
			
			include($m4blog."account/accMenu.php"); 
			
		}
		
		include($m4blog."account/userDB.php"); 
		
	} else {
		
		include($m4blog."account/login.php"); 
		
	}
	
?>

<!--  ▲ ▲  -->

<?php include($m4blog."footer.php"); ?>