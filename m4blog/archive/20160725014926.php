
	<?php 
		
		if(isset($_POST['loadPHP'])) {
			include($m4blog.$_POST['loadPHP']);
		} else {echo 'You got issues. Go <a href="/m4blog/">HOME</a>.';}
		
	?>
