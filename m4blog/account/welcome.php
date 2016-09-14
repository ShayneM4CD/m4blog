
<div class="post" id="welcome">

	<div class="content">
		<center>
		<p class="welcome">
			<?php if(isset($_SESSION['user'])) {
			echo("Welcome, ".$_SESSION['user'].".</p>");
			} else {
				echo("Welcome, please log in.");
			}
			?>
		</center>
	</div>
	
</div>
