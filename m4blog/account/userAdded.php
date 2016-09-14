<div class="post" id="userAdded">

	<p class="welcome introPara">
	
		<!--/ PHP | Add User to Database \-->
		<?php

if ($_SESSION["addUserID"]) {
	
	echo 'User '.$_SESSION["addUserID"].' Has Been Added'; 
	
}

$_SESSION['addUserID'] = NULL;

		?>
		<!--\ PHP | Add User to Database /-->

	</p>
	
</div>
