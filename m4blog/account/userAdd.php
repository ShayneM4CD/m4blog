<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php") 
?>

<?php include($m4blog."header.php"); ?>

<!-- ▼ ▼ -->

<div class="post" id="login">

	<p class="welcome">
	
		<!--/ PHP | Add User to Database \-->
		<?php
$_SESSION["addUserID"] = $_POST["addUserID"];
$_SESSION["addUserPW"] = $_POST["addUserPW"];
if (isset($_SESSION['addUserID'])) {
			
} // = $_POST['addUserID'];
	$db_query='INSERT INTO users(username,password) VALUES("'.$_SESSION["addUserID"].'",md5("'.$_SESSION["addUserPW"].'"))';
		
$_SESSION["addUserPW"] = NULL;

	if(!mysqli_query($db_con,$db_query)) {
		die('Error: ' . mysqli_errno($db_con));
	} else {
		header( 'Location: /m4blog/account/' ) ;
	}		
		?>
					
		<!--\ PHP | Add User to Database /-->

	</p>
	
</div>

<!--php if(isset($_SESSION["user"])) {header("Refresh:1");} ?-->

<!-- ▲ ▲ -->

<?php include($m4blog."/account/logoutGood.php"); ?>

<?php include($m4blog."footer.php"); ?>
