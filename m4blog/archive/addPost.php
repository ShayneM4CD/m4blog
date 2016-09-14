<div class="post"><!-- Add Post -->

	<div class="content" id="addPost">
	
		<br />
		
		<center>
			
			<h1 class="title">Add Post:</h1>
				
			<form action="/m4blog/archive/postAdd.php" method="post" onSubmit="return clickedPOST()">
				<table id="formTable3" class="formTable">
					<tr>
						<td>
							cTitle:
						</td><td>
							<input type="text" id="cTitle" name="cTitle" />
						</td>
					</tr>
					<tr>
						<td>
							pTitle:
						</td><td>
							<input type="text" id="pTitle" name="pTitle" />
						</td>
					</tr>
					<tr>
						<td>
							YYYY/MM/DD:
						</td><td>
							<input type="text" class="inputWidth" id="year" name="year" /> / 
							<input type="text" class="inputWidth" id="month" name="month" /> / 
							<input type="text" class="inputWidth" id="day" name="day" />
						</td>
					</tr>
					<tr>
						<td>
							HH/MM/SS:
						</td><td>
							<input type="text" class="inputWidth" id="hour" name="hour" /> / 
							<input type="text" class="inputWidth" id="minute" name="minute" /> / 
							<input type="text" class="inputWidth" id="second" name="second" />
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
