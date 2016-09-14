<div class="post" id="account">

	<div class="content">
	
		<br />
		
		<center>
			
			<h1 class="title">Add User:</h1>
				
			<form action="/m4blog/account/userAdd.php" method="post" onSubmit="return clickedADD()">
				<table id="formTable3" class="formTable">
					<tr>
						<td>
							<b id="user">Username: </b>
						</td><td>
							<input type="text" id="addUserID" name="addUserID" />
						</td>
					</tr>
					<tr>
						<td>
							Password:
						</td><td>
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
			
		<?php
		if(isset($_SESSION['addUserID'])) {
			
			echo 'User '.$_SESSION['addUserID'].' has been added.'; 

			$_SESSION["addUserID"] = NULL;

		}
		?>
		
		</center>
		
	</div>
	
</div>
