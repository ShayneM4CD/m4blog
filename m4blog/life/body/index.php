<?php 
	session_start(); 
	include("$_SERVER[DOCUMENT_ROOT]/m4blog/resources/config.php"); 
	
	include($m4blog."header.php");
?>


<div class="post" id="bodyMenu">
	<div class="content">
			<form action="#bodyMenu" method="POST">
				<div class="tdiv">
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="life/body/yoga.php">Yoga & Pilates</button>
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="life/body/notes.php">Schedules & Notes</button>
				</div>
				<div class="tdiv">
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="life/body/cal.php">Calisthenics</button>
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="life/body/tri.php">Triathletics</button>
				</div>
				<div class="tdiv">
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="life/body/rings.php">Rings & Para Bars</button>
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="life/body/weights.php">Weights & Machines</button>
				</div>
			</form>
	</div>
</div>

<div id="newLoadArea">
	<?php 
		if(isset($_POST['loadPHP'])) {
			include($m4blog.$_POST['loadPHP']);
		} else {}
	?>
</div>


<?php
	include($m4blog."footer.php"); 
?>