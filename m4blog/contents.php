
<!--  ▲ ▲  PHP | div id="contents"  ▲ ▲  -->

<div id="contents">

	<h2>Contents</h2>
	
	<ul>
			<?php
	
$result=mysqli_query($db_con,"SELECT count(*) as total from postArchive");

$data=mysqli_fetch_assoc($result);

$a = $data['total'];

while($a) {
	
	$query = mysqli_query($db_con,"SELECT * FROM postArchive WHERE post_id=" . $a ."");

	$post = mysqli_fetch_array($query);
		
	if($post) {
		echo '
		<li><a href="/m4blog/archive/index.php#post'.$post["year"].$post["month"].$post["day"].$post["hour"].$post["min"].$post["sec"].'">
			<strong>'.$post["year"]."-".$post["month"]."-".$post["day"].'</strong> | '.$post["contTitle"].'
		</a></li>
		';
	}
	$a--;
	
}
			?>
			
	</ul>
	
</div>

<!--  ▲ ▲  PHP | div id="contents"  ▲ ▲  -->
