<div class="post" id="account">
	
	<div class="content" id="logout">
				
		<center>
		
			<?php 
			
				if(isset($_SESSION["user"])) {
					echo '
<p class="welcome">'.$_SESSION["user"].' now logging out..</p>
					';
				} else {
					echo '
<p class="welcome">You are now logged out.</p>
					';
				}
			
			?>

		</center>
					
	</div>
	
</div>
