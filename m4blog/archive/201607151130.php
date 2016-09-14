
<div class="content">
	
	<?php echo '<p class="IntroPara">This be PHP!</p>'; ?> 
						
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	
		<table>
			
			<tr>
				<td>
					<b id="user1">User ID: </b>
				</td>
				
				<td>
					<input type="text" id="userID1" name="userID1" />
				</td>
			</tr>
			
			<tr>
				<td>
					Password:
				</td>
				
				<td>
					<input type="text" id="userPW1" name="userPW1" />
				</td>
			</tr>
			
			<tr>
				<td colspan="2">
					
					<input id="logButton1" name="logButton1"  class="logButton" type="submit" value="Login" onClick="clickedPHP1()" />
				</td>
			</tr>
			
		</table>
		<p id="incorrect"></p>
		<p id="helloUser"></p>
	</form>
	
</div>
