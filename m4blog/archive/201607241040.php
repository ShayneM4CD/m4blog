
<div class="content" id="addPostHTML">

	<br /><br />
	
	<center>
		
		<h1 class="title">Add Post:</h1>
		
		<form action="/m4blog/archive/postAddHTML.php" method="post" 
			onSubmit="return clickedHTML()">
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
						<input type="text" class="inputWidth" 
							id="year" name="year" /> / 
						<input type="text" class="inputWidth" 
							id="month" name="month" /> / 
						<input type="text" class="inputWidth" 
							id="day" name="day" />
					</td>
				</tr>
				<tr>
					<td>
						HH/MM/SS:
					</td><td>
						<input type="text" class="inputWidth" 
							id="hour" name="hour" /> / 
						<input type="text" class="inputWidth" 
							id="minute" name="minute" /> / 
						<input type="text" class="inputWidth" 
							id="second" name="second" />
					</td>
				</tr>
			</table>
			<br />
			
			<p class="welcome">Post HTML:</p>
			<br />

			<textarea id="postHTML" name="postHTML" value="postHTML">
				<?php include($m4blog."archive/postTemplate.php") ?>
			</textarea>
			<br /><br />
			
			<input id="addPostButton" name="addPostButton" 
				class="postButton" type="submit" value="Post" />

		</form>
		
	</center>
	
</div>
