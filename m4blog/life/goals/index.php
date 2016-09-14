<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php"); 
	
	include($m4blog."header.php");
	include($m4blog."life/lifeMenu.php");
?>

<center>
	<div class="post AutoWidth" id="">
		<div class="content" id="otherLinks">
			<b class="welcome">Other:</b><br />
			<a href="#newphp">New PHP</a><br />
		</div>
	</div>
</center>

<?php
	include $m4blog."life/other/newphp.php";
?>

<?php
	include($m4blog."footer.php"); 
?>
