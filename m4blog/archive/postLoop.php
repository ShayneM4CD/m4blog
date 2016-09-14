
<!--// Post Loop \\-->

			<?php

$result=mysqli_query($db_con,"SELECT count(*) as total from postArchive");

$data=mysqli_fetch_assoc($result);

$a = $data['total'];

while($a) {
	
	$queryID = mysqli_query($db_con,"SELECT * FROM postArchive WHERE post_id=" . $a ."");

	$post = mysqli_fetch_array($queryID);
	
	if($post) {
		echo '
<div class="post" id="post'.$post["year"].$post["month"].$post["day"].$post["hour"].$post["min"].$post["sec"].'">

	<h3 class="date">'.$post["year"].'-'.$post["month"].'-'.$post["day"].'</h3>
	<h4 class="time">'.$post["hour"].':'.$post["min"].'</h4>
	<h2 class="title">'.$post["postTitle"].'</h2>
	<br />
		';
		
		include($m4blog."archive/".$post["year"].$post["month"].$post["day"].$post["hour"].$post["min"].$post["sec"].".php");
		
		echo '
</div>
		';
	}
	
	$a--;
	
}
			?>
			
<!--\\ Post Loop //-->
			