<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php"); 
	
	include($m4blog."header.php");
?>
<br />
<center>
	<div class="post AutoWidth" id="">
		<div class="content" id="bagsLinks">
			<b class="welcome">Random / Notes:</b><br />
			<a href="#bags">Bags & Kits</a><br />
			<a href="#cook">Cooking</a><br />
			<a href="#makeExEquip">Make Exercise Equipment</a><br />
			<a href="#meditation">Meditation</a><br />
			<a href="#newTemps">New / Templates</a><br />
		</div>
	</div>
</center>


<?php
	
	include $m4blog."life/other/bags.php";
	include $m4blog."life/other/cook.php";
	include $m4blog."life/other/makeExEquip.php";
	include $m4blog."life/other/meditation.php";
	include $m4blog."life/other/newTemps.php";
	
?>

<?php
	include($m4blog."footer.php"); 
?>
