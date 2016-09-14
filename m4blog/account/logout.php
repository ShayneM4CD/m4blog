<?php 
	session_start();
	session_destroy(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php") 
?>

<?php include($m4blog."header.php"); ?>
<!-- ▼ ▼ -->
<?php if(isset($_SESSION["user"])) {header("Refresh:1");} ?>
<!-- ▲ ▲ -->
<?php include($m4blog."/account/logoutGood.php"); ?>

<?php include($m4blog."footer.php"); ?>