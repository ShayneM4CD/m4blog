
<div class="content" id="form2">
						
<!--/ PHP | welcome or login \-->
	<?php 

if(isset($_SESSION['user2'])) {
	
} 
if(isset($_POST['userID2'])) {
	$_SESSION['user2'] = $_POST['userID2'];
}
	
	
	
	
if(isset($_SESSION['user2']) || isset($_POST['userID2'])) {
	echo '
<p class="welcome">Wecome Back, ' . $_SESSION['user2'] . '</p>
<br />
<form method="get" action="/m4blog/account/logout.php">
	<input type="submit" value="Logout" />
</form>
	';
}
else {
	echo '
<form method="post" onSubmit="return clickedPHP2()">

	<table id="formTable2" class="formTable">
		
		<tr>
			<td>
				<b id="user2">User ID: </b>
			</td>
			
			<td>
				<input type="text" id="userID2" name="userID2" />
			</td>
		</tr>
		
		<tr>
			<td>
				Password:
			</td>
			
			<td>
				<input type="text" id="userPW2" name="userPW2" />
			</td>
		</tr>
		
		<tr>
			<td colspan="2" id="buttonSpace2">
				
				<input id="logButton2" name="logButton2" class="logButton" type="submit" value="Login" />
				
			</td>
		</tr>
		
	</table>
	
</form>	
	';
}
										
										
	?>
						
<!--\ PHP | welcome or login /-->
						
</div>
