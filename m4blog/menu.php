
<!--  ▼ ▼  PHP | div id="menu"  ▼ ▼  -->

<div id="menu">
	
	<div id="mainMenu">

		<a href="/m4blog/">Home</a><!--
			
		--><a href="/m4blog/archive/">Archive</a><!--
			
		--><a href="/m4blog/life/">Life</a><!--
			
		--><a href="/m4blog/about.php">About</a>
		
	</div>
	
	<div id="midMenu">
	
		<a href="/m4blog/">Login</a><!--
		
		--><a href="/m4blog/logout.php">Logout</a>
		
	</div>
	
	<div id="logMenu">
	
<!-- ▼ Change menu if logged in ▼ -->
	<?php
if (isset($_SESSION['user'])) {
	echo '
<script>	
	logMenu1();
</script>
	';
}
else {
	echo '
<script>	
	logMenu2();
</script>
	';
}
	?>
	
<!-- ▲ Change menu if logged in ▲ -->

	</div>

</div>

<!--  ▲ ▲  PHP | div id="menu"  ▲ ▲  -->
