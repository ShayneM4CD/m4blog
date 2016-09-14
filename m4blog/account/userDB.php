<div class="post" id="account">

	<div class="content">
		
<!--/ PHP | welcome or login \-->
		<?php 
				
if(isset($_SESSION['user'])) {

// User DB:
	$db_query2 = mysqli_query($db_con, "SELECT * FROM users");
	echo '
<center>
	<br />
	<h1 class="title">User Database:</h1>
	<br /><br />
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
</center>
<br />
	';
}

else {
	echo '
<form action="/m4blog/account/" method="post" onSubmit="return clickedSQL()">

	<table id="formTable3" class="formTable">
		
		<tr>
			<td>
				<b id="user">Username: </b>
			</td>
			
			<td>
				<input type="text" id="userID" name="userID" />
			</td>
		</tr>
		
		<tr>
			<td>
				Password:
			</td>
			
			<td>
				<input type="text" id="userPW" name="userPW" />
			</td>
		</tr>
		
		<tr>
			<td colspan="2" id="buttonSpace3">
				
				<input id="logButton" name="logButton" class="logButton" type="submit" value="Login" />
				
			</td>
		</tr>
		
	</table>
	
</form>
	';
}
					
					
	?>
	
<!--\ PHP | welcome or login /-->
		
	</div>
	
</div>
