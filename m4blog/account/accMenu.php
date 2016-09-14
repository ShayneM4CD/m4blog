
<div class="post" id="accMenu">
		<center>
	<div class="content">
			<form action="#accMenu" method="POST">
				<div class="qdiv">
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="archive/addPostHTML.php">AddPost HTML</button>
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="account/addUser.php">Add User</button>
				</div>
				<div class="qdiv">
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="archive/addPostHTML.php">AddPost HTML</button>
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="account/addUser.php">Add User</button>
				</div>
				<div class="qdiv">
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="archive/addPostHTML.php">AddPost HTML</button>
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="account/addUser.php">Add User</button>
				</div>
				<div class="qdiv">
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="archive/addPostHTML.php">AddPost HTML</button>
					<button type="submit" class="button" id="loadPHP" name="loadPHP" 
						value="account/addUser.php">Add User</button>
				</div>
			</form>
	</div>
		</center>
</div>

<div id="accLoadArea">
	<?php 
		if(isset($_POST['loadPHP'])) {
			include($m4blog.$_POST['loadPHP']);
		} else {}
	?>
</div>
