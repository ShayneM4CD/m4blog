
<div class="content">
		
<!--/ PHP | welcome or login \-->
	<?php 
				
if(isset($_SESSION['user'])) {
	echo '
	
<br /><br /><br /><br />

<center>
	
	<h1 class="title">Add User:</h1>
		
	<form action="/m4blog/account/addUser.php" method="post" onSubmit="return clickedADD()">

		<table id="formTable3" class="formTable">
			
			<tr>
				<td>
					<b id="user">User ID: </b>
				</td>
				
				<td>
					<input type="text" id="addUserID" name="addUserID" />
				</td>
			</tr>
			
			<tr>
				<td>
					Password:
				</td>
				
				<td>
					<input type="password" id="addUserPW" name="addUserPW" />
				</td>
			</tr>
			
			<tr>
				<td colspan="2" id="buttonSpace4">
					
					<input id="addUserButton" name="addUserButton" class="logButton" type="submit" value="Add" />
					
				</td>
			</tr>
			
		</table>
		
	</form>
</center>
<br /><br />
	';

	$db_query2 = mysqli_query($db_con, "SELECT * FROM users");
	echo '
<center>
	<br />
	<h1 class="title">User List:</h1>
	<br />
	<table id="userList" class="table1">
		<tr>
			<th><b>ID</b></th>
			<th><b>Username</b></th>
			<th><b>md5 Encrypted Password</b></th>
		</tr>
		<tr>';
			while($record = mysqli_fetch_array($db_query2)){
				echo '
			<td class="tdRalign">'.$record["user_id"].'</td>
			<td>'.$record["username"].'</td>
			<td>'.$record["password"].'</td>
		</tr>
				';
			}
		echo '
	</table>
	<br />
</center>
	'; 
} 
else {
	echo '
<center>
	<p class="welcome introPara">
		<br />
		You must be logged in to view the database.
		<br /><br />
		<a href="#post201607161500">LOGIN</a>
</p>
</center>
	';
}
					
					
	?>
				
<!--\ PHP | welcome or login /-->
		
</div>
